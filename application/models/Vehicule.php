<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Model {
    public function get_by_id($id) {
        $query = $this->db->get_where('vehicule', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('vehicule', array('deleted' => FALSE));
        return $query->result_array();
    }
    /*
    format de $data :
        $data = array(
            'immatriculation' => 'XX-XXXX-XX',
            'puissance' => 150,
            'marque' => 'BMW',
            autre colonne ...
        );
    */
    public function get_all_with_deleted() {
        $query = $this->db->get('vehicule');
        return $query->result_array();
    }

    public function insert($data) {
        $data['deleted'] = FALSE;
        return $this->db->insert('vehicule', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('vehicule', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('vehicule', array('deleted' => TRUE));
    }
}
            