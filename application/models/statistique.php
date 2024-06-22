<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistique extends CI_Model {

    public function get_nb_utilisateur($mois, $annee) {
        // Requête pour obtenir le nombre d'utilisateurs par assureur
        $query = "SELECT a.nom AS nom_assureur, f.id_assureur,
                  COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs
                  FROM facture f
                  JOIN vehicule v ON f.id_vehicule = v.id
                  JOIN utilisateur u ON v.id_utilisateur = u.id
                  JOIN assureur a ON f.id_assureur = a.id
                  WHERE EXTRACT(YEAR FROM f.date_debut) = ?
                  AND EXTRACT(MONTH FROM f.date_debut) = ?
                  GROUP BY f.id_assureur, nom_assureur
                  ORDER BY f.id_assureur";
    
        $query_result = $this->db->query($query, array($annee, $mois));
        $result = $query_result->result_array();
    
        // Requête pour obtenir le nombre total d'utilisateurs pour le mois et l'année spécifiés
        $total_query = "SELECT COUNT(DISTINCT v.id_utilisateur) AS total_utilisateurs
                        FROM facture f
                        JOIN vehicule v ON f.id_vehicule = v.id
                        WHERE EXTRACT(YEAR FROM f.date_debut) = ?
                        AND EXTRACT(MONTH FROM f.date_debut) = ?";
        
        $total_query_result = $this->db->query($total_query, array($annee, $mois));
        $total_result = $total_query_result->row_array();
        $total_utilisateurs = $total_result['total_utilisateurs'];
    
        // Ajouter le nombre total d'utilisateurs à chaque ligne du résultat
        foreach ($result as &$row) {
            $row['total_utilisateurs'] = $total_utilisateurs;
        }
        return $result;
    }

    public function get_nb_utilisateur_par_assurance($mois, $annee,$idAssurance) {
        $query = "SELECT a.nom AS nom_assureur,
                DATE_TRUNC('week', f.date_debut) AS semaine_debut,
                COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs
            FROM facture f
            JOIN vehicule v ON f.id_vehicule = v.id
            JOIN utilisateur u ON v.id_utilisateur = u.id
            JOIN assureur a ON f.id_assureur = a.id
            WHERE EXTRACT(YEAR FROM f.date_debut) = ?
            AND EXTRACT(MONTH FROM f.date_debut) = ?
            AND f.id_assureur = ?
            GROUP BY f.id_assureur, a.nom, semaine_debut
            ORDER BY semaine_debut";

        $query = $this->db->query($query, array($annee, $mois ,$idAssurance));
        return $query->result_array();
    }
    
    public function get_assurance_plus_utilise($mois, $annee) {
        $query = "SELECT f.id_assureur,
        COUNT(DISTINCT v.id_utilisateur) AS nombre_utilisateurs
        FROM facture f
        JOIN vehicule v ON f.id_vehicule = v.id
        JOIN utilisateur u ON v.id_utilisateur = u.id
        WHERE EXTRACT(YEAR FROM f.date_debut) = ?
        AND EXTRACT(MONTH FROM f.date_debut) = ?
        GROUP BY annee, mois, f.id_assureur
        ORDER BY annee, mois, f.id_assureur";

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

    public function get_frequence_payement_by_frequence($annee, $mois, $frequence) {
        $query = "SELECT 
                    a.nom,
                    p.frequence, 
                    COUNT(DISTINCT p.id_utilisateur) AS nombre_utilisateurs
                FROM payement p
                JOIN vehicule v ON p.id_vehicule = v.id
                JOIN assureur a ON v.id_assureur = a.id
                WHERE EXTRACT(YEAR FROM p.date_payement) = ?
                AND EXTRACT(MONTH FROM p.date_payement) = ?
                AND p.frequence = ?
                GROUP BY p.frequence,a.nom
                ORDER BY p.frequence";
    
        $result = $this->db->query($query, array($annee, $mois, $frequence));
        return $result->result_array();
    }
}
