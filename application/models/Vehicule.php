<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicule extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        return $this->db->get('vehicule')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('vehicule', array('id' => $id))->row_array();
    }

    public function insert($data) {
        $this->db->insert('vehicule', $data);
        return $this->db->insert_id();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('vehicule', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('vehicule');
    }

    public function get_count() {
        return $this->db->count_all('vehicule');
    }

    public function get_vehicules($limit, $offset) {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('vehicule');
        return $query->result_array();
    }
}
?>
