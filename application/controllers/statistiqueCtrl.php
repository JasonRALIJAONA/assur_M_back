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

    public function get_stats() {
        $mois = $this->input->post('mois');
        $annee = $this->input->post('annee');
        
        if (!is_numeric($mois) || $mois < 1 || $mois > 12 || !is_numeric($annee) || $annee < 2000 || $annee > date("Y")) {
            show_error('Les paramètres mois et annee doivent être numériques et valides.');
            return;
        }

        $assuranceData = $this->statistique->get_assurance_plus_utilise($mois, $annee);
        $frequenceData = $this->statistique->get_frequence_payement($mois, $annee);

        $data = array(
            'assurance' => $assuranceData,
            'frequence' => $frequenceData
        );

        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($data));
    }
}
