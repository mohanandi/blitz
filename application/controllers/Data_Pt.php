<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pt extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
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
}
