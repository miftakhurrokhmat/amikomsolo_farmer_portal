<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['News_model', 'Setting_model']);
        $this->load->helper('url');
        $this->load->library('pagination'); // penting untuk pagination
    }

    public function index()
    {
        // Setup pagination
        $config['base_url'] = site_url('home/index');
        $config['total_rows'] = $this->News_model->count_all(); // buat method count_all di model
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['about'] = $this->Setting_model->get('about');

        $contact_json = $this->Setting_model->get('contact');
        $data['contact'] = !empty($contact_json) ? json_decode($contact_json, true) : [];

        $data['demo'] = $this->Setting_model->get('demo');
        $data['news'] = $this->News_model->get_paginated($config['per_page'], $page); // method paginated
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('home/landing', $data);
    }

    public function news_detail($id = null)
    {
        if ($id === null) {
            show_404();
        }

        $data['about'] = $this->Setting_model->get('about');

        $contact_json = $this->Setting_model->get('contact');
        $data['contact'] = !empty($contact_json) ? json_decode($contact_json, true) : [];

        $data['demo'] = $this->Setting_model->get('demo');

        // ambil berita berdasarkan id
        $data['news_detail'] = $this->News_model->get_by_id($id);

        if (empty($data['news_detail'])) {
            show_404();
        }

        // load view detail berita
        $this->load->view('home/news_detail', $data);
    }
}
