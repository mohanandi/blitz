<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_Visa_Model');
        $this->load->model('Jenis_Visa_Model');
        $this->load->model('DataPt_Model');
        $this->load->model('Tka_Model');
    }
    public function index()
    {
        $data['judul'] = 'Data Visa';
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisa();
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa', $data);
        $this->load->view('templates/footer');
    }
    public function visa312($id_visa)
    {
        $data['judul'] = 'Data Visa';
        $data['data_visa'] = $this->Data_Visa_Model->getAllVisa211($id_visa);
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa312', $data);
        $this->load->view('templates/footer');
    }
    public function visa211($id_visa)
    {
        $data['judul'] = 'Data Visa';
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['data_pengguna_visa'] = $this->Data_Visa_Model->getAllvisa211($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa211', $data);
        $this->load->view('templates/footer');
    }
    public function filter_tka_visa211($id_visa)
    {

        $data['judul'] = 'Data Visa';
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
        if ($this->input->post('nama_pt')) {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['id_tenaga'] = $this->Tka_Model->getTkaIdByPt($this->input->post('nama_pt'));
                $data['jalan_pintas'] = null;
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['jalan_pintas'] = 1;
            }
        } else {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['id_tenaga'] = $this->Tka_Model->getTkaIdPt();
                $data['jalan_pintas'] = null;
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['id_tenaga'] = $this->Data_Visa_Model->getVisaSebelumnya($data['visa_sebelumnya']['id']);
                $data['jalan_pintas'] = 1;
            }
        }
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa211_filter', $data);
        $this->load->view('templates/footer');
    }
    public function edit_visa211($id_visa)
    {
        $data['judul'] = 'Data Visa';
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa211_form', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_visa211()
    {
        $this->form_validation->set_rules('tgl_awal', 'Nama Mandarin', 'required');
        $this->form_validation->set_rules('tgl_expired', 'Nama Latin', 'required');
        $this->form_validation->set_rules('ket', 'Kewarganegaraan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $id_tka = $this->input->post('id_tka');
            $id_visa = $this->input->post('id_visa');
            $data['data_tka'] = $this->Tka_Model->getTkaById($id_tka);
            $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
            $data['subjudul'] = $data['data_jenis_visa']['visa'];
            $data['judul'] = 'Data Visa';
            $data['button'] = 'Tambahkan Data Visa';
            $this->load->view('templates/header', $data);
            $this->load->view('data_visa/data_visa211_form', $data);
            $this->load->view('templates/footer');
        } else {
            $id_visa = $this->input->post('id_visa');
            $this->Data_Visa_Model->tambahPenghubungVisa211();
            $id_penghubung = $this->Data_Visa_Model->getPenghubungVisa211();
            $this->Data_Visa_Model->tambahVisa211($id_penghubung['id_penghubung_visa211']);
            $this->session->set_flashdata('flash', 'Visa Berhasil Ditambahkan');
            redirect("Data_Visa/visa211/$id_visa");
        }
    }
}
