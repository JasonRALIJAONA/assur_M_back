<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carburant extends CI_Model {
    public function get_all() {
        $query = $this->db->get('carburant');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('carburant', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('carburant', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('carburant');
    }
}
            