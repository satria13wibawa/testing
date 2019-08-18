<?php

class Barang_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("barang_controller"));
        }
    }

    function index()
    {
        $this->load->view('templates/header1');
        $this->load->database();
        $jumlah_data = $this->barang_model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'barang_controller/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['barang'] = $this->barang_model->data($config['per_page'], $from);
        $this->load->view('barang_index', $data);
        $this->load->view('templates/footer');
    }

    function barang_input()
    {
        $this->load->view('templates/header1');
        $this->load->view('barang_input');
        $this->load->view('templates/footer');
    }

    function aksi()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama', 'required|trim|is_unique[barang.nama_barang]|min_length[5]');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|numeric');

        if ($this->form_validation->run() != false) {

            $nama = $this->input->post('nama_barang');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'nama_barang' => $nama,
                'jumlah' => $jumlah
            );

            $this->barang_model->input_data($data, 'barang');
            redirect(base_url('barang_controller'));
        } else {
            $this->load->view('barang_input');
        }
    }

    /*function tambah_aksi()
    {
        $nama = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'nama_barang' => $nama,
            'jumlah' => $jumlah
        );

        $this->barang_model->input_data($data, 'barang');
        redirect(base_url('barang_controller'));
    }*/

    function barang_edit($id)
    {
        $this->load->view('templates/header1');
        $where = array('id' => $id);
        $data['barang'] = $this->barang_model->edit_data($where, 'barang')->result();
        $this->load->view('barang_edit', $data);
        $this->load->view('templates/footer');
    }

    function update()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|numeric');

        if ($this->form_validation->run() != false) {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama_barang');
            $jumlah = $this->input->post('jumlah');

            $data = array(
                'nama_barang' => $nama,
                'jumlah' => $jumlah
            );

            $where = array(
                'id' => $id
            );

            $this->barang_model->update_data($where, $data, 'barang');
            redirect(base_url('barang_controller'));
        } else {
            $this->load->view('barang_edit');
        }
    }

    function barang_hapus($id)
    {
        $where = array('id' => $id);
        $this->barang_model->hapus_data($where, 'barang');
        redirect(base_url('barang_controller'));
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('home'));
    }
}
