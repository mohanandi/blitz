<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('data_visa');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('data_visa_tambah');
        $this->load->view('templates/footer');
    }
}
