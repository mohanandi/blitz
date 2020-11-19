<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Rptka extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Data RPTKA';
        $this->load->view('templates/header', $data);
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
