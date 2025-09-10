<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seed extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        echo "Gunakan: /seed/users, /seed/news, /seed/settings, atau /seed/all";
    }

    public function users() {
        if ($this->db->table_exists('users')) {
            $this->db->truncate('users');
        }
        $data = [
            ['name'=>'Administrator','email'=>'admin@example.com','password'=>md5('admin123')],
            ['name'=>'User Demo','email'=>'user@example.com','password'=>md5('user123')],
        ];
        $this->db->insert_batch('users', $data);
        echo "Users seeded ✅";
    }

    public function news() {
        if ($this->db->table_exists('news')) {
            $this->db->truncate('news');
        }
        $data = [
            ['title'=>'Selamat Datang di Portal Pertanian','content'=>'Ini adalah berita pertama di admin panel.','created_at'=>date('Y-m-d H:i:s')],
            ['title'=>'Panen Raya 2025','content'=>'Petani melaporkan hasil panen meningkat 20% dibanding tahun lalu.','created_at'=>date('Y-m-d H:i:s')],
            ['title'=>'Teknologi Pertanian Baru','content'=>'Penggunaan drone dalam pemantauan sawah semakin populer.','created_at'=>date('Y-m-d H:i:s')],
        ];
        $this->db->insert_batch('news', $data);
        echo "News seeded ✅";
    }

    public function settings() {
        if ($this->db->table_exists('settings')) {
            $this->db->truncate('settings');
        }
        $data = [
            ['key'=>'about','value'=>'Kami adalah platform untuk membantu petani memasarkan produk mereka.'],
            ['key'=>'contact','value'=>json_encode(['alamat'=>'Jl. Pertanian No.1','telepon'=>'08123456789','email'=>'info@pertanian.com'])],
            ['key'=>'demo','value'=>'https://demo.pertanian.com']
        ];
        $this->db->insert_batch('settings', $data);
        echo "Settings seeded ✅";
    }

    public function all() {
        $this->users();
        echo "\n";
        $this->news();
        echo "\n";
        $this->settings();
        echo "\nAll seeding done ✅";
    }
}
