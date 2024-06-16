<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operateur extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        return $this->db->get('operateur')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('operateur', array('id' => $id))->row_array();
    }

    public function insert($data) {
        $this->db->insert('operateur', $data);
        return $this->db->insert_id();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('operateur', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('operateur');
    }
}
?>
