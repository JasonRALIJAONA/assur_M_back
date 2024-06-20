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
            $this->load->view("page/login", $data); // page login
        } else {
            redirect('login/accueil'); // page accueil    
                // if ($this->Utilisateur->is_admin($reponse)) {
                //     redirect('login/accueil');
                // } else {
                //     $data['error'] = "Vous n'avez pas les droits d'administrateur";
                //     $this->load->view("page/login", $data);
                // }        
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
            );
            $this->Utilisateur->update($id, $update_data);
            redirect('login/accueil');
        }

        $data['contents'] = 'page/accueil';
        $this->load->view('templates/template', $data);
    }

    public function supprimer($id) {
        $this->Utilisateur->delete($id);
        redirect('login/accueil');
    }
}
?>
