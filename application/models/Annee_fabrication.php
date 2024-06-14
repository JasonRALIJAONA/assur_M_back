<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annee_fabrication extends CI_Model {
    public function get_all() {
        $query = $this->db->get('annee_fabrication');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('annee_fabrication', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('annee_fabrication', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('annee_fabrication');
    }
}
            