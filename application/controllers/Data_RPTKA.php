<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_RPTKA extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('data_rptka');
        $this->load->view('templates/footer');
    }

	 public function detail()
    {
        $this->load->view('templates/header');
        $this->load->view('data_rptka_detail');
        $this->load->view('templates/footer');
    }
}
