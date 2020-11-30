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
        $data['data_visa'] = $this->Data_Visa_Model->getAllVisa211($id_visa);
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
                $data['data_tka'] = $this->Tka_Model->getTkaIdByPt($this->input->post('nama_pt'));
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
            }
        } else {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['data_tka'] = $this->Tka_Model->getTkaIdPt();
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
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
    }
}
