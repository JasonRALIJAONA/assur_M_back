<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistique extends CI_Model {
    public function get_stat_assurance_par_semaine($id_assureur, $debut, $fin) {
        $query = "WITH weekly_usage AS (
            SELECT DATE_TRUNC('week', f.date_debut) AS week, 
            COUNT(DISTINCT u.id) AS user_count  
            FROM facture f 
            JOIN vehicule v ON f.id_vehicule = v.id 
            JOIN utilisateur u ON v.id_utilisateur = u.id 
            WHERE f.id_assureur = ?
            AND f.date_debut BETWEEN ? AND ?
            GROUP BY week 
        ),
        filtered_weeks AS (
            SELECT week, user_count 
            FROM weekly_usage 
        ) SELECT week, user_count FROM filtered_weeks ORDER BY week";
    
        $bindings = array($id_assureur, $annee, $mois, $mois, $annee);
        $query = $this->db->query($query, $bindings);
        return $query->result_array();
    }

    public function get_assurance_plus_utilise($debut, $fin) {
        $query = "SELECT f.id_assureur, a.nom, 
        COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs 
        FROM facture f 
        JOIN assureur a ON f.id_assureur = a.id 
        JOIN vehicule v ON f.id_vehicule = v.id 
        JOIN utilisateur u ON v.id_utilisateur = u.id 
        WHERE f.date_debut BETWEEN ? AND ? 
        GROUP BY a.nom, f.id_assureur 
        ORDER BY a.nom, f.id_assureur";

        $query = $this->db->query($query, array($debut, $fin));
        return $query->result_array();
    }

    public function get_frequence_payement($debut, $fin) {
        $query = "SELECT EXTRACT(YEAR FROM f.date_debut) AS annee, 
        EXTRACT(MONTH FROM f.date_debut) AS mois, 
        COUNT(*) AS nombre_paiements 
        FROM facture f 
        WHERE f.date_debut BETWEEN ? AND ? 
        GROUP BY annee, mois 
        ORDER BY annee, mois";

        $result = $this->db->query($query, array($debut, $fin));
        return $result->result_array();
    }
}   