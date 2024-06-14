<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Model {
    // $data = array(
    //     'nom' => $this->input->post('nom'),
    //     'prenom' => $this->input->post('prenom'),
    //     'adresse' => $this->input->post('adresse'),
    //     'naissance' => $this->input->post('naissance'),
    //     'email' => $this->input->post('email'),
    //     'mdp' => $this->input->post('mdp'),
    //     'telephone' => $this->input->post('telephone')
    // );

    public function get_by_id($id) {
        $query = $this->db->get_where('utilisateur', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('utilisateur', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('utilisateur');
        return $query->result_array();
    }
    
    public function insert($data) {
        return $this->db->insert('utilisateur', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('utilisateur', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('utilisateur');
    }
}