<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Tka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Data TKA';
        $this->load->view('templates/header', $data);
        $this->load->view('data_tka');
        $this->load->view('templates/footer');
    }
    public function detail()
    {
        $this->load->view('templates/header');
        $this->load->view('data_tka_detail');
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $this->load->view('templates/header');
        $this->load->view('data_tka_edit');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('data_tka_tambah');
        $this->load->view('templates/footer');
    }
    public function notif()
    {
        $this->load->view('templates/header');
        $this->load->view('data_tka_notif');
        $this->load->view('templates/footer');
    }
}
