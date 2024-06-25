<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactureCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Facture');
        $this->load->helper('url');
    }

    public function index($page = 1) {
        $limit = 8;
        $offset = ($page - 1) * $limit;
        
        $total_factures = $this->Facture->get_count();
    
        $data['factures'] = $this->Facture->get_factures($limit, $offset);
        $data['total_pages'] = ceil($total_factures / $limit);
        $data['current_page'] = $page;
        $data['contents'] = 'page/facture';
        $this->load->view('templates/template', $data);
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

    public function modifier($id) {
        if ($this->input->post('action') == 'modifier') {
            $update_data = array(
                'date_debut' => $this->input->post('date_debut'),
                'date_fin' => $this->input->post('date_fin'),
                'police_assurance' => $this->input->post('police_assurance'),
                'id_assureur' => $this->input->post('id_assureur'),
                'id_vehicule' => $this->input->post('id_vehicule')
            );
            $this->Facture->update($id, $update_data);
            redirect('factureCtrl/index');
        } else {
            $data['facture'] = $this->Facture->get_facture($id);
            $this->load->view('page/facture', $data);
        }
    }

    public function supprimer($id) {
        $this->Facture->delete($id);
        redirect('factureCtrl/index');
    }
}
?>
