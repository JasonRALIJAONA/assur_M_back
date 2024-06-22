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
}
?>
