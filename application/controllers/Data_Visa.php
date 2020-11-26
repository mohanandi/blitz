<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Data Visa';
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Data Visa';
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa_tambah');
        $this->load->view('templates/footer');
    }
}
