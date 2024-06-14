<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facture extends CI_Model {
    public function get_all() {
        $query = $this->db->get('facture');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('facture', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('facture', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('facture');
    }
}