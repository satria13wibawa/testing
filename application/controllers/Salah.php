<?php

class Salah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('salah');
        $this->load->view('templates/footer');
    }

    function klik()
    {
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }
}
