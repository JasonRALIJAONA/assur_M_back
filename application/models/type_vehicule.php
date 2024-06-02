<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_vehicule extends CI_Model {
    // $data = array(
    //     'nom' => $this->input->post('nom'),
    // );

    public function get_by_id($id) {
        $query = $this->db->get_where('type_vehicule', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('type_vehicule', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('type_vehicule');
        return $query->result_array();
    }

    public function insert($data) {
        $data['deleted'] = FALSE;
        return $this->db->insert('type_vehicule', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('type_vehicule', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('type_vehicule', array('deleted' => TRUE));
    }
}