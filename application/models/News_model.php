<?php
class News_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->order_by('created_at', 'DESC')->get('news')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('news', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('news', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('news', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('news', ['id' => $id]);
    }

    public function count_all()
    {
        return $this->db->count_all('news');
    }

    public function get_paginated($limit, $start)
    {
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get('news');
        return $query->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('news', ['id' => $id])->row_array();
    }
}
