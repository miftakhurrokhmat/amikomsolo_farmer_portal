<?php
class User_model extends CI_Model {

    public function get_user($email, $password) {
        return $this->db->get_where('users', ['email' => $email, 'password' => $password])->row();
    }

    public function insert($data) {
        return $this->db->insert('users', $data);
    }

    public function exists($email) {
        return $this->db->where('email', $email)->count_all_results('users') > 0;
    }
}
