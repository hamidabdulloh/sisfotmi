<?php

defined('BASEPATH') or exit('No direct script access allowed');

class matapelajaran_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('indukdata/matapelajaran_m');
    }
    public function index()
    {
        $data['matapelajaran'] = $this->matapelajaran_m->getAllmatapelajaran();
        $this->load->view('main/header_v');
        $this->load->view('indukdata/matapelajaran_v', $data);
        $this->load->view('main/footer_v');
    }

    public function tambahmatapelajaran()
    {
        $this->form_validation->set_rules('idmatapelajaran', '⚠ ID', 'required|is_unique[tb_matapelajaran.idmatapelajaran]');
        $this->form_validation->set_rules('matapelajaran', '⚠ Mata Pelajaran', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/tambahmatapelajaran_v');
            $this->load->view('main/footer_v');
        } else {
            $this->matapelajaran_m->tambahmatapelajaran();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DITAMBAH <b>');
            redirect('indukdata/matapelajaran_c');
        }
    }

    public function hapusmatapelajaran($idmatapelajaran)
    {
        $this->matapelajaran_m->hapusmatapelajaran($idmatapelajaran);
        $this->session->set_flashdata('flash', 'Data Berhasil <b> DIHAPUS </b>');
        redirect('indukdata/matapelajaran_c');
    }



    public function ubahmatapelajaran($idmatapelajaran)
    {
        $data['matapelajaran'] = $this->matapelajaran_m->getmatapelajaranbyid($idmatapelajaran);

        $this->form_validation->set_rules('idmatapelajaran', '⚠ ID', 'required');
        $this->form_validation->set_rules('matapelajaran', '⚠ Mata Pelajaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/ubahmatapelajaran_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->matapelajaran_m->ubahmatapelajaran();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DIUBAH <b>');
            redirect('indukdata/matapelajaran_c');
        }
    }
}
