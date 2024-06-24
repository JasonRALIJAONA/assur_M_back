<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Recherche');
    }

    public function index($page = 1) {
        $limit = 5;
        $offset = ($page - 1) * $limit;

        // Assume we have a method in the Recherche model to get the total count of records
        $total_results = $this->Recherche->get_count(); 

        $data['results'] = $this->Recherche->search(null, null, null, null, null, $limit, $offset);
        $data['total_pages'] = ceil($total_results / $limit);
        $data['current_page'] = $page;
        $data['contents'] = 'page/recherche';

        $this->load->view('templates/template', $data);
    }

    public function search($page = 1) {
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $police_assurance = $this->input->post('police_assurance');
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');
        $immatriculation = $this->input->post('numero_immatriculation');
        $nom_utilisateur = $this->input->post('nom_utilisateur');

        $results = $this->Recherche->search($police_assurance, $date1, $date2, $immatriculation, $nom_utilisateur, $limit, $offset);
        $total_results = count($results); // You might need to adjust this to get the correct total count

        $data['results'] = $results;
        $data['total_pages'] = ceil($total_results / $limit);
        $data['current_page'] = $page;
        $data['contents'] = 'page/recherche';

        $this->load->view('templates/template', $data);
    }
}
