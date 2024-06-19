<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistique extends CI_Model {
    
    public function get_assurance_plus_utilise($mois, $annee) {
        $query = "SELECT f.id_assureur, a.nom, 
        COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs
        FROM facture f
        JOIN assureur a ON f.id_assureur = a.id
        JOIN vehicule v ON f.id_vehicule = v.id
        JOIN utilisateur u ON v.id_utilisateur = u.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = 2023
        AND EXTRACT(MONTH FROM f.date_debut) = 1
        GROUP BY a.nom, f.id_assureur
        ORDER BY a.nom, f.id_assureur";

        $query = $this->db->query($query, array($annee, $mois));
        return $query->result_array();
    }

    public function get_frequence_payement($mois, $annee) {
        $query = "SELECT EXTRACT(YEAR FROM f.date_debut) AS annee, 
        EXTRACT(MONTH FROM f.date_debut) AS mois, 
        COUNT(*) AS nombre_paiements 
        FROM facture f
        WHERE EXTRACT(YEAR FROM f.date_debut) = ? 
        AND EXTRACT(MONTH FROM f.date_debut) = ? 
        GROUP BY annee, mois 
        ORDER BY annee, mois";

        $result = $this->db->query($query, array($annee, $mois));
        return $result->result_array();
    }
}   