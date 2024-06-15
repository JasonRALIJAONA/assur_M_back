<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etat extends CI_Model {
    public function get_all() {
        $query = $this->db->get('etat');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('etat', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('etat', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('etat');
    }
}
            