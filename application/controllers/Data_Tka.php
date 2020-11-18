<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Tka extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
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
