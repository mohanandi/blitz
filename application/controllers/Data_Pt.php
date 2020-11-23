<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataPt_Model');
        $this->load->model('User_Model');
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Data PT';
        $data['pt'] = $this->DataPt_Model->getAllDatapt();
        $this->load->view('templates/header', $data);
        $this->load->view('data_pt/data_pt', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Data PT | Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('data_pt/data_pt_dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function notif()
    {
        $this->load->view('templates/header');
        $this->load->view('data_pt/data_pt_notif');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['pic'] = $this->User_Model->getPic();
        $data['judul'] = "Data PT";
        $this->form_validation->set_rules('namapt', 'Nama PT', 'trim|required|is_unique[pt.nama_pt]');
        $this->form_validation->set_rules('pic', 'PIC', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_pt/data_pt_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->DataPt_Model->tambahDataPt();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Data_Pt');
        }
    }

    public function hapus($id)
    {
        $this->DataPt_Model->hapusDataPt($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_Pt');
    }

    public function ubah($id = null)
    {
        $data['judul'] = 'Data PT | Edit';
        $data['pt'] = $this->db->get_where('pt', ['nama_client' => $this->session->userdata('nama_client')])->row_array();
        $data['pt'] = $this->DataPt_Model->getPtById($id);

        $this->form_validation->set_rules('namapt', 'Nama PT', 'trim|required|is_unique[pt.nama_pt]');
        $this->form_validation->set_rules('pic', 'PIC', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_pt/data_pt_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->DataPt_Model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Data_Pt');
        }
    }
}
