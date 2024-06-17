<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facture extends CI_Model {

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

}
?>
