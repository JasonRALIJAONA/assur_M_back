<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_vehicule extends CI_Model {
    // $data = array(
    //     'nom' => $this->input->post('nom'),
    // );

    public function get_all() {
        $query = $this->db->get('type_vehicule');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('type_vehicule', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('type_vehicule', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('type_vehicule');
    }
}