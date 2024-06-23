<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChiffredAffaireCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Chiffre_Affaire');
    }

    public function index() {

        $data['contents'] = 'page/chiffredAffaire';
        $this->load->view('templates/template', $data);

        // $this->load->view('page/chiffredAffaire');
    }

    public function get_daily_chiffre_affaire() {
        $annee = $this->input->post('year');
        $mois = $this->input->post('month');
        $id_assureur = 1; // You can set this to a specific assureur ID or get it dynamically

        $debut = "$annee-$mois-01";
        $fin = date("Y-m-t", strtotime($debut)); // Get the last day of the month

        $result = $this->Chiffre_Affaire->get_daily_chiffre_affaire($id_assureur, $debut, $fin);
        $data = ['daily_chiffre_affaire' => $result];

        echo json_encode($data);
    }
}
