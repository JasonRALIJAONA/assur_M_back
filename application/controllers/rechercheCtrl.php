<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Recherche');
    }

    public function index() {
        $this->load->view('page/recherche', array('results' => array()));
    }

    public function search() {
        $police_assurance = $this->input->post('police_assurance');
        $annee = $this->input->post('annee');
        $immatriculation = $this->input->post('numero_immatriculation');
        $nom_utilisateur = $this->input->post('nom_utilisateur');

        $results = $this->Recherche->search($police_assurance, $annee, $immatriculation, $nom_utilisateur);

        $this->load->view('page/recherche', array('results' => $results));
    }
}
