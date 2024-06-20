<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chiffre_Affaire extends CI_Model {
    public function get_chiffre_affaire($id_assureur, $mois, $annee) {
        $query = "SELECT a.nom, SUM(p.valeur) AS chiffre_affaire
        FROM assureur a
        JOIN vehicule v ON v.id_assureur = a.id
        JOIN payement p ON p.id_vehicule = v.id
        WHERE a.id = ?
        AND EXTRACT(MONTH FROM p.date_payement) = ?
        AND EXTRACT(YEAR FROM p.date_payement) = ?
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC";

        $query = $this->db->query($query, array($id_assureur, $mois, $annee));
        return $query->result_array();
    }
    
    public function get_chiffre_affaire_par_assurance($mois, $annee) {
        $query = "SELECT a.nom, SUM(p.valeur) AS chiffre_affaire
        FROM assureur a
        JOIN vehicule v ON v.id_assureur = a.id
        JOIN payement p ON p.id_vehicule = v.id
        WHERE EXTRACT(MONTH FROM p.date_payement) = ?
        AND EXTRACT(YEAR FROM p.date_payement) = ?
        GROUP BY a.nom
        ORDER BY chiffre_affaire DESC";

        $query = $this->db->query($query, array($mois, $annee));
        return $query->result_array();
    }
}