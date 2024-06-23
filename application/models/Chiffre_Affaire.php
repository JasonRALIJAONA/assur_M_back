<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chiffre_Affaire extends CI_Model {
    // Chiffre d'affaire d'UNE assurance
    public function get_daily_chiffre_affaire($id_assureur, $debut, $fin) {
        $query = "SELECT a.nom, p.date_payement,
        SUM(p.valeur*(100-a.commission)/100) AS chiffre_affaire
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE a.id = ?
        AND  p.date_payement BETWEEN ? AND ?
        GROUP BY a.nom, p.date_payement
        ORDER BY p.date_payement";

        $query = $this->db->query($query, array($id_assureur, $debut, $fin));
        return $query->result_array();
    }

    public function get_chiffre_affaire($id_assureur, $debut, $fin) {
        $query = "SELECT a.nom, SUM(p.valeur*(100-a.commission)/100) AS chiffre_affaire
        FROM assureur a
        JOIN vehicule v ON v.id_assureur = a.id
        JOIN payement p ON p.id_vehicule = v.id
        WHERE a.id = ?
        AND  p.date_payement BETWEEN ? AND ?
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC";

        $query = $this->db->query($query, array($id_assureur, $debut, $fin));
        return $query->result_array();
    }
    
    // Par  assurance
    public function get_daily_chiffre_affaire_par_assurance($debut, $fin) {
        $query = "SELECT a.nom, p.date_payement,
        SUM(p.valeur*a.commission/100) AS chiffre_affaire
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN ? AND ?
        GROUP BY a.nom, p.date_payement
        ORDER BY p.date_payement";

        $query = $this->db->query($query, array($debut, $fin));
        return $query->result_array();
    }
    
    public function get_chiffre_affaire_par_assurance($debut, $fin) {
        $query = "SELECT a.nom AS assureur,
        SUM(p.valeur*a.commission/100) AS chiffre_affaire
        FROM payement p
        JOIN vehicule v ON p.id_vehicule = v.id
        JOIN assureur a ON v.id_assureur = a.id
        WHERE p.date_payement BETWEEN ? AND ?
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC";

        $query = $this->db->query($query, array($debut, $fin));
        return $query->result_array();
    }
}