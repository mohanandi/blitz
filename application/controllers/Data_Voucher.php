<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Voucher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Voucher_Model');
        $this->load->model('DataPt_Model');
        $this->load->model('Jenis_Voucher_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Data Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/data_voucher');
        $this->load->view('templates/footer');
    }
    public function kategori()
    {
        $this->form_validation->set_rules('nama_pt', 'Nama PT', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('jenis_proses', 'Jenis Proses', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Data Voucher';
            $data['button'] = 'Buat Voucher';
            $data['data_kategori'] = $this->Data_Voucher_Model->getKategori();
            $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
            $data['data_jenis_proses'] = $this->Jenis_Voucher_Model->getAllProsesVoucher();
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/kategori_form', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('kategori') == 1) {
                $this->input->post();
                $this->data_visa();
            } else {
                $this->input->post();
                $this->tambah_entertaint();
            }
        }
    }

    public function tambah_entertaint()
    {
        $data['judul'] = 'Data Voucher';
        $data['button'] = 'Buat Voucher';
        $data['id_pt'] = $this->input->post('nama_pt');
        $data['id_kategori'] = $this->input->post('kategori');
        $data['id_jenis_proses'] = $this->input->post('jenis_proses');
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/entertaint_form', $data);
        $this->load->view('templates/footer');
    }
    public function data_visa()
    {
        $data['judul'] = 'Data Voucher';
        $data['button'] = 'Buat Voucher';
        $data['id_pt'] = $this->input->post('nama_pt');
        $data['data_tka'] = $this->Data_Voucher_Model->getTkaIdByPt($this->input->post('nama_pt'));
        $data['id_kategori'] = $this->input->post('kategori');
        $data['id_jenis_proses'] = $this->input->post('jenis_proses');
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/data_visa', $data);
        $this->load->view('templates/footer');
    }
    public function tambahvouchervisa()
    {
        $data['id_tka'] = $this->input->post('data_tka[]');
        $data['id_pt'] = $this->input->post('nama_pt');
        $data['id_kategori'] = $this->input->post('kategori');
        $data['id_jenis_proses'] = $this->input->post('jenis_proses');
        $data['judul'] = 'Data Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/visa_form', $data);
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
