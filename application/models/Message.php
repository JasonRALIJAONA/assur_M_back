<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Model {
    public function get_all() {
        $query = $this->db->get('message');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('message', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('message', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('message');
    }
}
            