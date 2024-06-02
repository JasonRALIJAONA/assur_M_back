<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class operateur extends CI_Model {
    // $data = array(
    //     'nom' => $this->input->post('nom'),
    // );

    public function get_by_id($id) {
        $query = $this->db->get_where('operateur', array('id' => $id));
        return $query->row_array();
    }

    public function get_all() {
        $query = $this->db->get('operateur', array('deleted' => FALSE));
        return $query->result_array();
    }

    public function get_all_with_deleted() {
        $query = $this->db->get('operateur');
        return $query->result_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('operateur', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('operateur', array('deleted' => TRUE));
    }
}