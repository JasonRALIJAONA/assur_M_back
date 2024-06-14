<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puissance extends CI_Model {
    public function get_all() {
        $query = $this->db->get('puissance');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('puissance', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('puissance', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('puissance');
    }
}
            