<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {
    public function get_all() {
        $query = $this->db->get('service');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('service', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('service', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('service');
    }
}
            