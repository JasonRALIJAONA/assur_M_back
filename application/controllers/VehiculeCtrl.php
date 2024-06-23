<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehiculeCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vehicule');
        $this->load->helper('url');
    }

    public function index($page = 1) {
        $limit = 5;
        $offset = ($page - 1) * $limit;
        
        $total_vehicules = $this->Vehicule->get_count();

        $data['vehicules'] = $this->Vehicule->get_vehicules($limit, $offset);
        $data['total_pages'] = ceil($total_vehicules / $limit);
        $data['current_page'] = $page;
        $data['contents'] = 'page/vehicule';
        $this->load->view('templates/template', $data);
    }

    public function modif() {
        if ($this->input->post('action') == 'modifier') {
            $id = $this->input->post('id');
            $data['vehicule_modif'] = $this->Vehicule->get_by_id($id);
        } elseif ($this->input->post('action') == 'enregistrer') {
            $id = $this->input->post('id');
            $update_data = array(
                'immatriculation' => $this->input->post('immatriculation'),
                'puissance' => $this->input->post('puissance'),
                'marque' => $this->input->post('marque'),
                'place' => $this->input->post('place')
            );
            $this->Vehicule->update($id, $update_data);
            redirect('vehiculeCtrl/index');
        }
    }

    public function supprimer($id) {
        $this->Vehicule->delete($id);
        redirect('vehiculeCtrl/index');
    }
}
?>
