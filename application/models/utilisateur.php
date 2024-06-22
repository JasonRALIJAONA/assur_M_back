<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Model {
    
    public function log($mail, $mdp) {
        $reponse = 0;
        $query = $this->db->query("SELECT id FROM utilisateur WHERE email = ? AND mdp = ?", array($mail, $mdp));
        foreach ($query->result_array() as $row) {
            $reponse = $row['id'];
        }
        return $reponse;
    }
    
    public function get_by_id($id) {
        $query = $this->db->get_where('utilisateur', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get_where('utilisateur', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('utilisateur');
        return $query->result_array();
    }
    
    public function insert($data) {
        $data['deleted'] = FALSE;
        return $this->db->insert('utilisateur', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('utilisateur', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('utilisateur', array('deleted' => TRUE));
    }

    public function is_admin($id) {
        $query = $this->db->select('admin')->get_where('utilisateur', array('id' => $id));
        $result = $query->row_array();
        return isset($result['admin']) ? (bool) $result['admin'] : FALSE;
    }
}
