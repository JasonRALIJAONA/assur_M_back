<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Options extends CI_Model {
    
    public function get_assurance_plus_utilise($debut, $fin) {
        $query = "SELECT o.nom, COUNT(*) AS usage
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN options o ON v.id_options = o.id
        WHERE p.date_payement BETWEEN ? AND ?
        GROUP BY o.nom
        ORDER BY usage_count DESC";

        $query = $this->db->query($query, array($debut, $fin));
        return $query->result_array();
    }


    public function get_all() {
        $query = $this->db->get('options');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('options', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('options', $data);
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('options');
    }
}
            