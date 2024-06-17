<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statistiqueCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('statistique');
        $this->load->helper('url');
    }

    public function assurance_plus_utilise($mois, $annee) {
        $data['statistiques'] = $this->statistique->get_assurance_plus_utilise($mois, $annee);
        var_dump($data['statistiques']);
        $this->load->view('page/stat_plus_utilisee', $data);
    }    

    public function frequence_paiement($mois, $annee) {
        // $data['statistiques'] = $this->statistique->get_frequence_payement($mois, $annee);
        // $this->load->view('frequence_paiement', $data);
    }
}
?>
