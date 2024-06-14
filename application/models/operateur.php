<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operateur extends CI_Model {
    // $data = array(
    //     'nom' => $this->input->post('nom'),
    // );

    public function get_all() {
        $query = $this->db->get('operateur');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('operateur', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('operateur', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('operateur');
    }
}