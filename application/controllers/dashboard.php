<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('main/header_v');
        $this->load->view('dashboard_v');
        $this->load->view('main/footer_v');
    }
}
