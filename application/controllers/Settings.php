<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url','form']);
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
        $this->load->model('Setting_model');
    }

    public function about() {
        if ($this->input->post()) {
            $this->Setting_model->update('about', $this->input->post('content'));
            redirect('admin/settings/about');
        }
        $data['title'] = "Tentang Kami";
        $data['content'] = $this->Setting_model->get('about');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('settings/about', $data);
        $this->load->view('templates/footer');
    }

    public function contact() {
        if ($this->input->post()) {
            $this->Setting_model->update('contact', json_encode([
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email')
            ]));
            redirect('admin/settings/contact');
        }
        $data['title'] = "Kontak";
        $data['content'] = json_decode($this->Setting_model->get('contact'), true);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('settings/contact', $data);
        $this->load->view('templates/footer');
    }

    public function demo() {
        if ($this->input->post()) {
            $this->Setting_model->update('demo', $this->input->post('url'));
            redirect('admin/settings/demo');
        }
        $data['title'] = "Link Demo";
        $data['content'] = $this->Setting_model->get('demo');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('settings/demo', $data);
        $this->load->view('templates/footer');
    }
}
