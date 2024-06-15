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
        // echo "idVoaray ==> $reponse <br>";

        if ($reponse == 0) {
            echo "ATO IZY ZAO";
            
            $data['error'] = "Identifiants incorrects";
            $this->load->view("page/login", $data);
            // $data["contents"] = "page/accueil";
        } else {
            
            // echo "USER ZAY FA HITA";

            $data = array();
            $data["clients"] = $this->Utilisateur->get_by_id($reponse);
            $data["contents"] = "page/accueil";
            // $this->load->view("templates/template", $data);
        }
    }
}
?>
