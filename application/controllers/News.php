<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
        $this->load->model('News_model');
    }

    public function index()
    {
        $data['news'] = $this->News_model->get_all();
        $data['title'] = "Kelola Berita";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title', TRUE),
                'content' => $this->input->post('content'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->News_model->insert($data);
            redirect('admin/news');
        }
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('news/form');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title', TRUE),
                'content' => $this->input->post('content')
            ];
            $this->News_model->update($id, $data);
            redirect('admin/news');
        }
        $data['news'] = $this->News_model->get($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('news/form', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->News_model->delete($id);
        redirect('admin/news');
    }
}
