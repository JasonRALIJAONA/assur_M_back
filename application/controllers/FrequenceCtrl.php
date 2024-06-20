<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrequenceCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('statistique');
    }

    public function index() {
        $data['contents'] = 'page/frequence';
        $this->load->view('templates/template', $data);
    }

    public function get_stats() {
        $mois = $this->input->post('mois');
        $annee = $this->input->post('annee');
        
        if (!is_numeric($mois) || $mois < 1 || $mois > 12 || !is_numeric($annee) || $annee < 2000 || $annee > date("Y")) {
            show_error('Les paramètres mois et annee doivent être numériques et valides.');
            return;
        }

        $frequenceData = $this->statistique->get_frequence_payement($mois, $annee);

        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($frequenceData));
    }

    public function get_stats_by_frequence() {
        $annee = $this->input->post('annee');
        $mois = $this->input->post('mois');
        $frequence = $this->input->post('frequence');
        
        if (!is_numeric($mois) || $mois < 1 || $mois > 12 || !is_numeric($annee) || $annee < 2000 || $annee > date("Y")) {
            show_error('Les paramètres mois et annee doivent être numériques et valides.');
            return;
        }

        $frequenceData = $this->statistique->get_frequence_payement_by_frequence($annee, $mois, $frequence);

        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($frequenceData));
    }
}
