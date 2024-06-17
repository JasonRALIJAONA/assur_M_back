<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistique extends CI_Model {
    
    public function get_assurance_plus_utilise($mois, $annee) {
        $query = "SELECT a.nom AS assurance_name, COUNT(DISTINCT v.id_utilisateur) AS user_count
        FROM facture f JOIN assureur a ON f.id_assureur = a.id JOIN vehicule v ON f.id_vehicule = v.id WHERE EXTRACT(YEAR FROM f.date_debut) = ?
        AND EXTRACT(MONTH FROM f.date_debut) = ? AND f.deleted = FALSE AND a.deleted = FALSE AND v.deleted = FALSE GROUP BY a.nom ORDER BY user_count DESC";

        $query = $this->db->query($query, array($annee, $mois));
        return $query->result_array();
    }

    public function get_frequence_payement($mois, $annee) {
        $query = "SELECT 
                    p.frequence, 
                    COUNT(DISTINCT p.id_utilisateur) AS nombre_utilisateurs
                FROM payement p
                WHERE EXTRACT(YEAR FROM p.date_payement) = ?
                AND EXTRACT(MONTH FROM p.date_payement) = ?
                GROUP BY p.frequence
                ORDER BY p.frequence";
    
        $result = $this->db->query($query, array($annee, $mois));
        return $result->result_array();
    }
}   