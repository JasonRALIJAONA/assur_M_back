<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiqueCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('statistique');
    }

    public function index() {
        $data['contents'] = 'page/stat';
        $this->load->view('templates/template', $data);
    }

    public function get_nb_utilisateurs_assurances() {
        $mois = $this->input->post('mois');
        $annee = $this->input->post('annee');
        
        if (!is_numeric($mois) || $mois < 1 || $mois > 12 || !is_numeric($annee) || $annee < 2000 || $annee > date("Y")) {
            show_error('Les paramètres mois et annee doivent être numériques et valides.');
            return;
        }

        $utilisateursData = $this->statistique->get_nb_utilisateur($mois, $annee);

        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($utilisateursData));
    }

    public function get_nb_utilisateurs_assurance_specifique() {
    $mois = $this->input->post('mois');
    $annee = $this->input->post('annee');
    $idAssurance = $this->input->post('assurance');

    // Ajoutez des var_dump ou des echo pour déboguer
    // var_dump($mois, $annee, $idAssurance); // Vérifiez si ces valeurs sont correctes
    

    if (!is_numeric($mois) || $mois < 1 || $mois > 12 || !is_numeric($annee) || $annee < 2000 || $annee > date("Y") || !is_numeric($idAssurance) || $idAssurance <= 0) {
        show_error('Les paramètres mois, annee et assurance doivent être numériques et valides.');
        return;
    }

    $utilisateursAssuranceData = $this->statistique->get_nb_utilisateur_par_assurance($mois, $annee, $idAssurance);

    if (!$utilisateursAssuranceData) {
        show_error('Aucune donnée trouvée pour cette assurance.');
        return;
    }

    $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($utilisateursAssuranceData));
}

}
