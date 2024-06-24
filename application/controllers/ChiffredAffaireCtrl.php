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
    }

    public function get_daily_chiffre_affaire() {
        $debut = $this->input->post('debut');
        $fin = $this->input->post('fin');
        $id_assureur = 1; // idAssureur

        // $debut = "$annee-$mois-01";
        // $fin = date("Y-m-t", strtotime($debut)); 

        $result = $this->Chiffre_Affaire->get_daily_chiffre_affaire($debut, $fin);
        $data = ['daily_chiffre_affaire' => $result];

        echo json_encode($data);
    }

    public function get_chiffre_affaire() {
        $debut = $this->input->post('debut');
        $fin = $this->input->post('fin');
       
        $result = $this->Chiffre_Affaire->get_chiffre_affaire($debut, $fin);
        $details = $this->Chiffre_Affaire->get_daily_chiffre_affaire($debut, $fin);
        $data = ['chiffre_affaire' => $result,
                'details' => $details ];
       
        echo json_encode($data);
    }
}
