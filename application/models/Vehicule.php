<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Model {
    /*
    format de $data :
        $data = array(
            'immatriculation' => 'XX-XXXX-XX',
            'puissance' => 150,
            'marque' => 'BMW',
            autre colonne ...
        );
    */
    public function get_all() {
        $query = $this->db->get('vehicule');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('vehicule', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('vehicule', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('vehicule');
    }
}
            