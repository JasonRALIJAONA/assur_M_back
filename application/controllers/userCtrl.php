<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Utilisateur');
        $this->load->helper('url');
    }

    public function index($page = 1) {
        $limit = 5;
        $offset = ($page - 1) * $limit;
        
        $criteria = $this->input->post('criteria');
        $data = array();

        if ($criteria) {
            $data['results'] = $this->Utilisateur->search_users($criteria, $limit, $offset);
            $total_results = $this->Utilisateur->search_users_count($criteria);
        } else {
            $data['results'] = $this->Utilisateur->get_users($limit, $offset);
            $total_results = $this->Utilisateur->get_count();
        }

        $data['total_pages'] = ceil($total_results / $limit);
        $data['current_page'] = $page;
        $data['contents'] = 'page/rechercheSimple';
        $this->load->view('templates/template', $data);
    }
}
?>
