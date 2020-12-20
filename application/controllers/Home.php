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
        // $data = $this->Home_Model->getData(9);
        // $jumlah_visa_minggu = array();
        // var_dump($data);
        // echo "<br>";
        // echo date('d-m-Y', time() + (60 * 60 * 24 * 7));
        $data['jumlah_rptka'] = $this->Home_Model->jumlahRptka();
        $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
        $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
        $data['jumlah_voucher'] = $this->Home_Model->jumlahVoucher();
        $data['data_visa'] = $this->Home_Model->getDataJenisVisa();
        // foreach ($data['data_visa']['id'] as $visa) :
        //     $jumlah = $this->Home_Model->getData($visa['id']);
        //     array_push($jumlah, $jumlah_visa_minggu);
        // endforeach;
        // var_dump($jumlah_visa_minggu);
        $data['judul'] = "Home";
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
