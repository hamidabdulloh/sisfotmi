<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jenisptk_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('indukdata/jenisptk_m');
    }
    public function index()
    {
        $data['jenisptk'] = $this->jenisptk_m->getAlljenisptk();
        $this->load->view('main/header_v');
        $this->load->view('indukdata/jenisptk_v', $data);
        $this->load->view('main/footer_v');
    }

    public function tambahjenisptk()
    {
        $this->form_validation->set_rules('idjenisptk', '⚠ ID', 'required|is_unique[tb_jenisptk.idjenisptk]');
        $this->form_validation->set_rules('jenisptk', '⚠ Jenis PTK', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/tambahjenisptk_v');
            $this->load->view('main/footer_v');
        } else {
            $this->jenisptk_m->tambahjenisptk();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DITAMBAH <b>');
            redirect('indukdata/jenisptk_c');
        }
    }

    public function hapusjenisptk($idjenisptk)
    {
        $this->jenisptk_m->hapusjenisptk($idjenisptk);
        $this->session->set_flashdata('flash', 'Data Berhasil <b> DIHAPUS </b>');
        redirect('indukdata/jenisptk_c');
    }



    public function ubahjenisptk($idjenisptk)
    {
        $data['jenisptk'] = $this->jenisptk_m->getjenisptkbyid($idjenisptk);

        $this->form_validation->set_rules('idjenisptk', 'ID', 'required');
        $this->form_validation->set_rules('jenisptk', '⚠ Jenis PTK', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/ubahjenisptk_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->jenisptk_m->ubahjenisptk();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DIUBAH <b>');
            redirect('indukdata/jenisptk_c');
        }
    }
}
