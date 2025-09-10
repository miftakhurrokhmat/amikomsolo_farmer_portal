<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
        $this->load->model('News_model');
    }

    public function index() {
        $data['title'] = "Dashboard";
        $data['news_count'] = $this->News_model->count_all();
        $data['activity'] = [
            "Login berhasil",
            "Mengunjungi dashboard"
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
