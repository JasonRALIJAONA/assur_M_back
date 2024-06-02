<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assurance extends CI_Model {
    public function get_by_id($id) {
        $query = $this->db->get_where('assurance', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('assurance', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('assurance');
        return $query->result_array();
    }

    public function insert($data) {
        $data['deleted'] = FALSE;
        return $this->db->insert('assurance', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('assurance', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('assurance', array('deleted' => TRUE));
    }
}