<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Voucher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Data Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher_visa');
        $this->load->view('templates/footer');
    }

    public function visa()
    {
        $this->load->view('templates/header');
        $this->load->view('input_visa_211');
        $this->load->view('templates/footer');
    }

    public function other()
    {
        $this->load->view('templates/header');
        $this->load->view('input_visa_other');
        $this->load->view('templates/footer');
    }
}
