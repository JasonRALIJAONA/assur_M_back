<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Options extends CI_Model {
    public function get_all() {
        $query = $this->db->get('options');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('options', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('options', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('options');
    }
}
            