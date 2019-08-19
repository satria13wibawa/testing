<?php

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reg_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('reg_view');
        $this->load->view('templates/footer');
    }

    public function aksi()
    {
        $this->form_validation->set_rules('nama_user', 'Nama', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() != false) {

            $nama = $this->input->post('nama_user');
            $password = $this->input->post('password');

            $data = array(
                'nama_user' => $nama,
                'password' => md5($password)
            );

            $this->reg_model->input_data($data, 'user');
            redirect(base_url('registrasi'));
        } else {
            $this->load->view('reg_view');
        }
    }

    public function register()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'     => 'Register | ' . $site['nama_website'],
            'favicon'   => $site['favicon'],
            'site'      => $site
        );
        $this->template->load('authentication/layout/template', 'authentication/register', $data);
    }
}
