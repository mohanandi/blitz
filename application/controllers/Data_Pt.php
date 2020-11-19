<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataPt_Model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Data PT';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['data'] = $this->DataPt_Model->check($this->session->userdata('id'));
        $data['pt'] = $this->DataPt_Model->getAllDatapt();
        $this->load->view('templates/header', $data);
        $this->load->view('data_pt', $data);
        $this->load->view('templates/footer');
    }
    public function dashboard()
    {
        $data['judul'] = 'Data PT | Dashboard';
        $this->load->view('templates/header', $data);
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
        $data['judul'] = 'Data PT | Tambah';
        $this->form_validation->set_rules('namapt', 'Nama PT', 'required');
        $this->form_validation->set_rules('pic', 'PIC', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_pt_tambah');
            $this->load->view('templates/footer');
        } else {
            $this->DataPt_Model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Data_Pt');
        }
    }
}