<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facture extends CI_Model {

    public function get_by_id($id) {
        $query = $this->db->get_where('facture', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('facture', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('facture');
        return $query->result_array();
    }

    public function insert($data) {
        $data['deleted'] = FALSE;
        return $this->db->insert('facture', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('facture', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('facture', array('deleted' => TRUE));
    }
}