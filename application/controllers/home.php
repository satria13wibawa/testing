<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('view_home');
        $this->load->view('templates/footer');
    }

    function klik()
    {
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }
}
