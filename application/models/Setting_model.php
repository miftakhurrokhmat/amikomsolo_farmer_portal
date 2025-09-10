<?php
class Setting_model extends CI_Model {

    public function get($key) {
        $row = $this->db->get_where('settings', ['key' => $key])->row();
        return $row ? $row->value : '';
    }

    public function update($key, $value) {
        if ($this->db->get_where('settings', ['key' => $key])->row()) {
            return $this->db->where('key', $key)->update('settings', ['value' => $value]);
        } else {
            return $this->db->insert('settings', ['key' => $key, 'value' => $value]);
        }
    }
}
