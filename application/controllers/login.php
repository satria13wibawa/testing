<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }

    function aksi_login()
    {
        $username = $this->input->post('nama_user');
        $password = $this->input->post('password');
        $where = array(
            'nama_user' => $username,
            'password' => md5($password)
        );
        $cek = $this->login_model->cek_login("user", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama_user' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("barang_controller"));
        } else {
            $this->load->view('login_view');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
