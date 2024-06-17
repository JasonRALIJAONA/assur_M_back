<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class messageCtrl extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Message');
    }

    public function index() {
        $data['messages'] = $this->Message->get_all();
        $this->load->view('message/manage', $data);
    }

    public function store() {
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );
        
        $this->Message->insert($data);
        redirect('messageCtrl');
    }

    public function edit($id) {
        $data['message'] = $this->Message->get($id);
        $data['messages'] = $this->Message->get_all();
        $this->load->view('message/manage', $data);
    }

    public function update($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );
        
        $this->Message->update($id, $data);
        redirect('messageCtrl');
    }

    public function delete($id) {
        $this->Message->delete($id);
        redirect('messageCtrl');
    }
}
?>
