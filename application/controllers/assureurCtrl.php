<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assureurCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Assureur');
        $this->load->helper('url');
    }

    public function index() {
        $data['assureurs'] = $this->Assureur->get_all();
        $this->load->view('page/assureur', $data);
    }

}
?>
