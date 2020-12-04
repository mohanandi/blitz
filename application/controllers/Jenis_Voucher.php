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
    public function tambah_jenis_proses()
    {
        $this->form_validation->set_rules('nama_proses', 'Nama Proses', 'trim|required|is_unique[jenis_proses.nama_proses]', [
            'is_unique' => 'Nama Proses ini sudah ada di Database'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Jenis Proses Voucher';
            $data['button'] = 'Tambahkan Jenis Proses';
            $data['data_proses'] = $this->Jenis_Voucher_Model->getAllProsesVoucher();
            $this->load->view('templates/header', $data);
            $this->load->view('visa_voucher/data_jenis_proses_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jenis_Voucher_Model->TambahJenisProses();
            $this->session->set_flashdata('flash', 'Jenis Proses Berhasil Ditambah');
            redirect('Jenis_Voucher');
        }
    }
    public function tambah_harga()
    {
        $this->form_validation->set_rules('jenis_proses', 'Status RPTKA', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('dollar', 'Dollar', 'trim|required');
        $this->form_validation->set_rules('rupiah', 'Rupiah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Jenis Proses Voucher';
            $data['button'] = 'Tambahkan Data Harga';
            $data['data_proses'] = $this->Jenis_Voucher_Model->getAllProsesVoucher();
            $this->load->view('templates/header', $data);
            $this->load->view('visa_voucher/data_harga_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jenis_Voucher_Model->TambahHarga();
            $this->session->set_flashdata('flash', 'Harga Berhasil Ditambah');
            redirect('Jenis_Voucher');
        }
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
