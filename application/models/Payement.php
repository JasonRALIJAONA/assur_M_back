<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payement extends CI_Model {
    public function get_all() {
        $query = $this->db->get('payement');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('payement', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('payement', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('payement');
    }
}
            