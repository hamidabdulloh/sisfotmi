<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ruangankelas_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('indukdata/ruangankelas_m');
    }
    public function index()
    {
        $data['ruangankelas'] = $this->ruangankelas_m->getAllruangankelas();
        $this->load->view('main/header_v');
        $this->load->view('indukdata/ruangankelas_v', $data);
        $this->load->view('main/footer_v');
    }

    public function tambahruangankelas()
    {
        $this->form_validation->set_rules('idruangankelas', '⚠ ID', 'required|is_unique[tb_ruangankelas.idruangankelas]');
        $this->form_validation->set_rules('ruangan', '⚠ Nama Ruangan', 'required');
        $this->form_validation->set_rules('kelas', '⚠ Nama Kelas', '');
        $this->form_validation->set_rules('kapasitas', '⚠ Kapasitas', '');
        $this->form_validation->set_rules('jumlahsiswa', '⚠ Jumlah Siswa', '');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/tambahruangankelas_v');
            $this->load->view('main/footer_v');
        } else {
            $this->ruangankelas_m->tambahruangankelas();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DITAMBAH <b>');
            redirect('indukdata/ruangankelas_c');
        }
    }

    public function hapusruangankelas($idruangankelas)
    {
        $this->ruangankelas_m->hapusruangankelas($idruangankelas);
        $this->session->set_flashdata('flash', 'Data Berhasil <b> DIHAPUS </b>');
        redirect('indukdata/ruangankelas_c');
    }



    public function ubahruangankelas($idruangankelas)
    {
        $data['ruangankelas'] = $this->ruangankelas_m->getruangankelasbyid($idruangankelas);

        $this->form_validation->set_rules('idruangankelas', '⚠ ID', '');
        $this->form_validation->set_rules('ruangan', '⚠ Nama Ruangan', 'required');
        $this->form_validation->set_rules('kelas', '⚠ Nama Kelas', '');
        $this->form_validation->set_rules('kapasitas', '⚠ Kapasitas', '');
        $this->form_validation->set_rules('jumlahsiswa', '⚠ Jumlah Siswa', '');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('indukdata/ubahruangankelas_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->ruangankelas_m->ubahruangankelas();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DIUBAH <b>');
            redirect('indukdata/ruangankelas_c');
        }
    }
}
