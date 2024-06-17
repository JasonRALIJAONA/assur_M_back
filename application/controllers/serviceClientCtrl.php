<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceClientController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('service_client');
    }

    public function messages($id_utilisateur) {
        $data['messages'] = $this->service_client->get_message($id_utilisateur);
        $data['id_utilisateur'] = $id_utilisateur;
        // $this->load->view('service_client/messages', $data);
    }

    public function store_message($id_utilisateur) {
        $data = array(
            'id_envoyeur' => $id_utilisateur,
            'id_receveur' => $this->input->post('id_receveur'),
            'message' => $this->input->post('message'),
            'moment' => date('Y-m-d H:i:s'),
            'vue' => FALSE
        );
        
        $this->service_client->insert($data);
        // redirect('ServiceClientController/messages/' . $id_utilisateur);
    }
}
?>
