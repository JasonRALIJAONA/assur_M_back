<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Utilisateur');
        $this->load->helper('url');
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
            redirect('login/accueil');
        }
        
    }

    public function accueil() {
        $data['utilisateurs'] = $this->Utilisateur->get_all();
        $data['utilisateur_modif'] = null;

        if ($this->input->post('action') == 'modifier') {
            $id = $this->input->post('id');
            $data['utilisateur_modif'] = $this->Utilisateur->get_by_id($id);
        } elseif ($this->input->post('action') == 'enregistrer') {
            $id = $this->input->post('id');
            $update_data = array(
                'email' => $this->input->post('email'),
                'mdp' => $this->input->post('mdp')
            );
            $this->Utilisateur->update($id, $update_data);
            redirect('login/accueil');
        }

        $this->load->view('page/accueil', $data);
    }

    public function supprimer($id) {
        $this->Utilisateur->delete($id);
        redirect('login/accueil');
    }
}
?>
