<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('m_login');
        $this->load->library('session', 'form_validation');
    }

    function index() {
        $this->load->view('v_login');
    }

    function proses_login() {

    }
}