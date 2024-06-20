<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Model {
    
    public function search($police_assurance, $annee, $immatriculation, $nom_utilisateur) {
        $this->db->select('facture.*, assureur.nom as assureur_nom, vehicule.marque as vehicule_marque, utilisateur.nom as utilisateur_nom');
        $this->db->from('facture');
        $this->db->join('vehicule', 'facture.id_vehicule = vehicule.id');
        $this->db->join('assureur', 'facture.id_assureur = assureur.id');
        $this->db->join('utilisateur', 'vehicule.id_utilisateur = utilisateur.id');
        
        if ($police_assurance) {
            $this->db->like('facture.police_assurance', $police_assurance);
        }
        if ($annee) {
            $this->db->where('EXTRACT(YEAR FROM facture.date_debut) =', $annee);
        }
        if ($immatriculation) {
            $this->db->like('vehicule.immatriculation', $immatriculation);
        }
        if ($nom_utilisateur) {
            $this->db->like('utilisateur.nom', $nom_utilisateur);
        }

        $query = $this->db->get();
        return $query->result_array();
    }
}
