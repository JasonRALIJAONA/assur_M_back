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
        $data['contents'] = 'page/assureur';
        $this->load->view('templates/template', $data);
    }

    public function modif() {
        if ($this->input->post('action') == 'enregistrer') {
            $id = $this->input->post('id');
            $update_data = array(
                'nom' => $this->input->post('nom'),
                'commission' => $this->input->post('commission'),
                'num_telma' => $this->input->post('num_telma'),
                'num_orange' => $this->input->post('num_orange'),
                'num_airtel' => $this->input->post('num_airtel'),
            );
            $this->Assureur->update($id, $update_data);
            redirect('assureurCtrl/index');
        }
    }

    public function supprimer($id) {
        $this->Assureur->delete($id);
        redirect('assureurCtrl/index');
    }
}
?>
