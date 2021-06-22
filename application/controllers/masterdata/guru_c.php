<?php

defined('BASEPATH') or exit('No direct script access allowed');

class guru_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['masterdata/guru_m', 'indukdata/jenisptk_m', 'indukdata/matapelajaran_m', 'indukdata/statuskepegawaian_m']);
    }
    public function index()
    {
        $data['guru'] = $this->guru_m->getAllguru();
        $this->load->view('main/header_v');
        $this->load->view('masterdata/guru/guru_v', $data);
        $this->load->view('main/footer_v');
    }

    public function tambahguru()
    {
        $matapelajaran = $this->matapelajaran_m->getAllmatapelajaran();
        $jenisptk = $this->jenisptk_m->getAlljenisptk();
        $statuskepegawaian = $this->statuskepegawaian_m->getAllstatuskepegawaian();

        $data = array(
            'matapelajaran' => $matapelajaran,
            'jenisptk' => $jenisptk,
            'statuskepegawaian' => $statuskepegawaian
        );

        $this->form_validation->set_rules('idguru', '⚠ ID', 'required|is_unique[tb_guru.idguru]');
        $this->form_validation->set_rules('guru', '⚠ Nama Guru', 'required');
        $this->form_validation->set_rules('jeniskelamin', '⚠ Jenis Kelamin', '');
        $this->form_validation->set_rules('tempatlahir', '⚠ Tempat Lahir', '');
        $this->form_validation->set_rules('tanggallahir', '⚠ Tanggal Lahir', '');
        $this->form_validation->set_rules('alamat', '⚠ Alamat', '');
        $this->form_validation->set_rules($jenisptk, '⚠ Jenis PTK', '');
        $this->form_validation->set_rules($matapelajaran, '⚠ Mata Pelajaran', '');
        $this->form_validation->set_rules('tugastambahan', '⚠ Tugas Tambahan', '');
        $this->form_validation->set_rules($statuskepegawaian, '⚠ Status Kepegawaian', '');
        $this->form_validation->set_rules('nip', '⚠ NIP', '');
        $this->form_validation->set_rules('skcpns', '⚠ SK CPNS', '');
        $this->form_validation->set_rules('tanggalcpns', '⚠ Tanggal CPNS', '');
        $this->form_validation->set_rules('skpengangkat', '⚠ SK Pengangkat', '');
        $this->form_validation->set_rules('tmtpengangkat', '⚠ TMT Pengangkat', '');
        $this->form_validation->set_rules('lembpengangkat', '⚠ Lemb. Pengangkat', '');
        $this->form_validation->set_rules('pangkatgolruang', '⚠ Pangkat/Gol. Ruang', '');
        $this->form_validation->set_rules('foto', '⚠ Foto', '');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('masterdata/guru/tambahguru_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->guru_m->tambahguru();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DITAMBAH <b>');
            redirect('masterdata/guru_c');
        }
    }

    public function hapusguru($idguru)
    {
        $this->guru_m->hapusguru($idguru);
        $this->session->set_flashdata('flash', 'Data Berhasil <b> DIHAPUS </b>');
        redirect('masterdata/guru_c');
    }



    public function ubahguru($idguru)
    {
        $data['guru'] = $this->guru_m->getgurubyid($idguru);

        $this->form_validation->set_rules('idguru', '⚠ ID', 'required|is_unique[tb_guru.idguru]');
        $this->form_validation->set_rules('guru', '⚠ Nama Guru', 'required');
        $this->form_validation->set_rules('jeniskelamin', '⚠ Jenis Kelamin', '');
        $this->form_validation->set_rules('tempatlahir', '⚠ Tempat Lahir', '');
        $this->form_validation->set_rules('tanggallahir', '⚠ Tanggal Lahir', '');
        $this->form_validation->set_rules('alamat', '⚠ Alamat', '');
        $this->form_validation->set_rules('jenisptk', '⚠ Jenis PTK', '');
        $this->form_validation->set_rules('matapelajaran', '⚠ Mata Pelajaran', '');
        $this->form_validation->set_rules('tugastambahan', '⚠ Tugas Tambahan', '');
        $this->form_validation->set_rules('statuskepegawaian', '⚠ Status Kepegawaian', '');
        $this->form_validation->set_rules('nip', '⚠ NIP', '');
        $this->form_validation->set_rules('skcpns', '⚠ SK CPNS', '');
        $this->form_validation->set_rules('tanggalcpns', '⚠ Tanggal CPNS', '');
        $this->form_validation->set_rules('skpengangkat', '⚠ SK Pengangkat', '');
        $this->form_validation->set_rules('tmtpengangkat', '⚠ TMT Pengangkat', '');
        $this->form_validation->set_rules('lembpengangkat', '⚠ Lemb. Pengangkat', '');
        $this->form_validation->set_rules('pangkatgolruang', '⚠ Pangkat/Gol. Ruang', '');
        $this->form_validation->set_rules('foto', '⚠ Foto', '');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header_v');
            $this->load->view('masterdata/guru/ubahguru_v', $data);
            $this->load->view('main/footer_v');
        } else {
            $this->guru_m->ubahguru();
            $this->session->set_flashdata('flash', 'Data Berhasil <b> DIUBAH <b>');
            redirect('masterdata/guru_c');
        }
    }
}
