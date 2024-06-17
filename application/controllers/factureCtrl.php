<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class factureCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Facture');
        $this->load->helper('url');
    }

    public function index() {
        $data['factures'] = $this->Facture->get_all();
        $this->load->view('page/facture', $data);
    }

    public function ajouter() {
        if ($this->input->post('action') == 'ajouter') {
            $insert_data = array(
                'date_debut' => $this->input->post('date_debut'),
                'date_fin' => $this->input->post('date_fin'),
                'police_assurance' => $this->input->post('police_assurance'),
                'id_assureur' => $this->input->post('id_assureur'),
                'id_vehicule' => $this->input->post('id_vehicule')
            );
            $this->Facture->insert($insert_data);
            redirect('factureCtrl/index');
        } else {
            $this->load->view('page/facture');
        }
    }
}
?>
