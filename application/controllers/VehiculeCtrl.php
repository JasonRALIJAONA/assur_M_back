<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehiculeCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vehicule');
        $this->load->helper('url');
    }

    public function index() {
        $data['vehicules'] = $this->Vehicule->get_all();
        $this->load->view('page/vehicule', $data);
    }

    
}
?>
