<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Home_Model');
    }

    public function index()
    {
        $data['jumlah_visa'] = $this->Home_Model->jumlahVisa();
        $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
        $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
        $data['judul'] = "Home";
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
