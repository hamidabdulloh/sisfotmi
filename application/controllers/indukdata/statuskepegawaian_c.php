<?php

defined('BASEPATH') or exit('No direct script access allowed');

class statuskepegawaian_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('indukdata/statuskepegawaian_m');
    }
    public function index()
    {
        $data['statuskepegawaian'] = $this->statuskepegawaian_m->getAllstatuskepegawaian();
        $this->load->view('main/header_v');
        $this->load->view('indukdata/statuskepegawaian_v', $data);
        $this->load->view('main/footer_v');
    }

    public function tambahstatuskepegawaian()
    {
        $this->form_validation->set_rules('idstatuskepegawaian', '⚠ ID', 'required|is_unique[tb_statuskepegawaian.idstatuskepegawaian]');
        $this->form_validation->set_rules('statuskepegawaian', '⚠ Status Kepegawaian', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/tambahstatuskepegawaian_v');
            $this->load->view('main/footer_v');
        } else {
            $this->statuskepegawaian_m->tambahstatuskepegawaian();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DITAMBAH <b>');
            redirect('indukdata/statuskepegawaian_c');
        }
    }

    public function hapusstatuskepegawaian($idstatuskepegawaian)
    {
        $this->statuskepegawaian_m->hapusstatuskepegawaian($idstatuskepegawaian);
        $this->session->set_flashdata('flash', 'Data Berhasil <b> DIHAPUS </b>');
        redirect('indukdata/statuskepegawaian_c');
    }



    public function ubahstatuskepegawaian($idstatuskepegawaian)
    {
        $data['statuskepegawaian'] = $this->statuskepegawaian_m->getstatuskepegawaianbyid($idstatuskepegawaian);

        $this->form_validation->set_rules('idstatuskepegawaian', '⚠ ID', 'required');
        $this->form_validation->set_rules('statuskepegawaian', '⚠ Status Kepegawaian', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/ubahstatuskepegawaian_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->statuskepegawaian_m->ubahstatuskepegawaian();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DIUBAH <b>');
            redirect('indukdata/statuskepegawaian_c');
        }
    }
}
