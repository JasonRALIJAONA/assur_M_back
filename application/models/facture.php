<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facture extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('facture', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('facture');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('facture', $data);
    }

    public function get_count() {
        return $this->db->count_all('facture');
    }
    
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('facture', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('facture', array('deleted' => TRUE));
    }

    public function get_factures($limit, $offset) {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('facture');
        return $query->result_array();
    }
}
?>
