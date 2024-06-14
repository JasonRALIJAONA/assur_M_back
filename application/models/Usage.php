<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usage extends CI_Model {
    public function get_all() {
        $query = $this->db->get('usage');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('usage', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('usage', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('usage');
    }
}