<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Data PT';
        $this->load->view('templates/header', $data);
        $this->load->view('data_pt');
        $this->load->view('templates/footer');
    }
    public function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('data_pt_dashboard');
        $this->load->view('templates/footer');
    }
    public function notif()
    {
        $this->load->view('templates/header');
        $this->load->view('data_pt_notif');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('data_pt_tambah');
        $this->load->view('templates/footer');
    }
}
