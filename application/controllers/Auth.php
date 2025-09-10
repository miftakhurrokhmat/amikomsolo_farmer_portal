<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(['url','form']);
        $this->load->library('session');
        $this->load->database();
    }

    public function login() {
        if ($this->input->post()) {
            $email = $this->input->post('email', TRUE);
            $password = md5($this->input->post('password', TRUE));

            $user = $this->User_model->get_user($email, $password);
            if ($user) {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('user_name', $user->name);
                redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Email / password salah');
                redirect('login');
            }
        }
        $this->load->view('auth/login');
    }

    public function register() {
        if ($this->input->post()) {
            $email = $this->input->post('email', TRUE);
            if ($this->User_model->exists($email)) {
                $this->session->set_flashdata('error', 'Email sudah terdaftar');
                redirect('register');
            }
            $data = [
                'name' => $this->input->post('name', TRUE),
                'email' => $email,
                'password' => md5($this->input->post('password', TRUE))
            ];
            $this->User_model->insert($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login');
            redirect('login');
        }
        $this->load->view('auth/register');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
