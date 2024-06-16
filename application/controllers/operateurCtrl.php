<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class operateurCtrl extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Operateur');
            $this->load->helper('url');
        }
        
        public function index() {
            $data['operateurs'] = $this->Operateur->get_all();
            $this->load->view('page/operateur', $data);
        } 
    }
?>
