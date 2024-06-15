<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service_client extends CI_Model {

    public function get_message($id_utilisateur) {
        $query = "SELECT * FROM message WHERE id_receveur = ? OR id_envoyeur = ? ORDER BY moment ASC";
        $query = $this->db->query($query, array($id_utilisateur,$id_utilisateur));
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('message', $data);
    }
}   