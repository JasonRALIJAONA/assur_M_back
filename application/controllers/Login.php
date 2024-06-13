<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Utilisateur');
    }

    public function index() {
        $this->load->view("page/login");
    }

    public function seconnecter() {
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('mdp');
		
		$reponse = $this->Utilisateur->log($mail, $mdp);
		if ($reponse == 0) {
			$data['error'] = "Identifiants incorrects";
			$this->load->view("page/login", $data);
		} else {
			// echo "<script>alert('Utilisateur vérifié ');</script>";		
			$data = array();
			$data["clients"] = $this->Utilisateur->get_by_id($reponse);
			$data["contents"] = "page/accueil";
		}
	}
	
    public function retour($id) {
        $data = array();
        $data["clients"] = $this->Utilisateur->get_by_id($id);
        $data["contents"] = "page/accueil";
    }
}
