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
        $this->load->view('view_home');
    }

    function klik()
    {
        $this->load->view('login_view');
    }
}
