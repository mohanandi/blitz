<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Report';
        $this->load->view('templates/header', $data);
        $this->load->view('report/report');
        $this->load->view('templates/footer');
    }
}
