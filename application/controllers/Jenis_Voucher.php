<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Voucher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jenis_Voucher_Model');
    }

    public function index()
    {
        $data['judul'] = 'Jenis Proses Voucher';
        $data['data_harga'] = $this->Jenis_Voucher_Model->getAllHargaVoucher();
        $data['data_proses'] = $this->Jenis_Voucher_Model->getAllProsesVoucher();
        $this->load->view('templates/header', $data);
        $this->load->view('visa_voucher/data_jenis_proses', $data);
        $this->load->view('templates/footer');
    }
    public function tambahProses()
    {
        $data['judul'] = 'Jenis Proses Voucher';
        $data['data_harga'] = $this->Jenis_Voucher_Model->getAllHargaVoucher();
        $data['data_proses'] = $this->Jenis_Voucher_Model->getAllProsesVoucher();
        $this->load->view('templates/header', $data);
        $this->load->view('proses_voucher/data_jenis_proses', $data);
        $this->load->view('templates/footer');
    }
}
