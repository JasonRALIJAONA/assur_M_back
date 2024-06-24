<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Model {
    
    public function search($police_assurance, $date1, $date2, $immatriculation, $nom_utilisateur, $limit = 5, $offset = 0) {
        $this->db->select('facture.*, assureur.nom as assureur_nom, vehicule.marque as vehicule_marque, utilisateur.nom as utilisateur_nom');
        $this->db->from('facture');
        $this->db->join('vehicule', 'facture.id_vehicule = vehicule.id');
        $this->db->join('assureur', 'facture.id_assureur = assureur.id');
        $this->db->join('utilisateur', 'vehicule.id_utilisateur = utilisateur.id');
        
        if ($police_assurance) {
            $this->db->like('facture.police_assurance', $police_assurance);
        }
        
        if ($date1 && $date2) {
            $this->db->where('facture.date_debut >=', $date1);
            $this->db->where('facture.date_debut <=', $date2);
        } elseif ($date1) {
            $this->db->where('facture.date_debut', $date1);
        } elseif ($date2) {
            $this->db->where('facture.date_debut', $date2);
        }
        
        if ($immatriculation) {
            $this->db->like('vehicule.immatriculation', $immatriculation);
        }
        
        if ($nom_utilisateur) {
            $this->db->like('utilisateur.nom', $nom_utilisateur);
        }

        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_count() {
        return $this->db->count_all('facture');
    }
}
