<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assureur extends CI_Model {
    public function get_all() {
        $query = $this->db->get('assureur');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('assureur', $data);
    }

}