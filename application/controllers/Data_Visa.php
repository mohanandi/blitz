<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_Visa_Model');
        $this->load->model('Rptka_Model');
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
        $data['data_pengguna_visa'] = $this->Data_Visa_Model->getAllVisa312($id_visa);
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa312', $data);
        $this->load->view('templates/footer');
    }
    public function filter_tka_visa312($id_visa)
    {

        $data['judul'] = 'Data Visa';
        $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
        $data['subjudul'] = $data['data_jenis_visa']['visa'];
        $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
        if ($this->input->post('nama_pt')) {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['id_tenaga'] = $this->Tka_Model->getTkaIdByPt($this->input->post('nama_pt'));
                $data['jalan_pintas'] = null;
                $data['check_pt'] = $this->input->post('nama_pt');
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['id_tenaga'] = $this->Data_Visa_Model->getVisa211Sebelumnya($data['visa_sebelumnya']['id']);
                $data['jalan_pintas'] = 1;
                $data['check_pt'] = $this->input->post('nama_pt');
            }
        } else {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['id_tenaga'] = $this->Tka_Model->getTkaIdPt();
                $data['jalan_pintas'] = null;
                $data['check_pt'] = null;
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['id_tenaga'] = $this->Data_Visa_Model->getVisa211Sebelumnya($data['visa_sebelumnya']['id']);
                $data['jalan_pintas'] = 1;
                $data['check_pt'] = null;
            }
        }
        $this->load->view('templates/header', $data);
        $this->load->view('data_visa/data_visa312_filter', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_visa312()
    {
        $this->form_validation->set_rules('no_rptka', 'No RPTKA', 'trim|required');
        $this->form_validation->set_rules('jabatan_rptka', 'Jabatan RPTKA', 'trim|required');
        $this->form_validation->set_rules('tgl_awal', 'Tanggal Awal Visa', 'trim|required');
        $this->form_validation->set_rules('waktu_visa', 'Jangka Waktu visa (Bulan)', 'trim|required');
        $this->form_validation->set_rules('tgl_expired', 'Tanggal Expired', 'trim|required');
        $this->form_validation->set_rules('no_kitas', 'No KITAS', 'trim|required');
        $this->form_validation->set_rules('no_notifikasi', 'No Notifikasi', 'trim|required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $id_tka = $this->input->post('id_tka');
            $data['data_tka'] = $this->Tka_Model->getTkaById($id_tka);
            $data = array(
                'data_rptka' => $this->Rptka_Model->getRptkaByPt($data['data_tka']['id_pt']),
                'data_jabatan' => $this->Rptka_Model->getJabtanPilihan(),
            );
            $id_tka = $this->input->post('id_tka');
            $data['data_tka'] = $this->Tka_Model->getTkaById($id_tka);
            $id_tka = $this->input->post('id_tka');
            $id_visa = $this->input->post('id_visa');
            $data['data_jenis_visa'] = $this->Jenis_Visa_Model->getJenisVisaById($id_visa);
            $data['subjudul'] = $data['data_jenis_visa']['visa'];
            $data['judul'] = 'Data Visa';
            $data['button'] = 'Tambahkan Data Visa';
            $this->load->view('templates/header', $data);
            $this->load->view('data_visa/data_visa312_form', $data);
            $this->load->view('templates/footer');
        } else {
            $id_visa = $this->input->post('id_visa');
            $this->Data_Visa_Model->tambahPenghubungVisa312();
            $id_penghubung = $this->Data_Visa_Model->getPenghubungVisa312();
            $this->Data_Visa_Model->tambahVisa312($id_penghubung['id_penghubung_visa312']);
            $jabatan = $this->Rptka_Model->getJabatanById($this->input->post('jabatan_rptka'));
            $jabatan_terpakai = $jabatan['terpakai'] + 1;
            $this->Rptka_Model->TambahTerpakaiJabatan($jabatan_terpakai);
            $rptka = $this->Rptka_Model->getRptkaById($this->input->post('no_rptka'));
            $terpakai = $rptka['jumlah_terpakai'] + 1;
            $this->Rptka_Model->TambahTerpakaiRptka($terpakai);
            $this->session->set_flashdata('flash', 'Visa Berhasil Ditambahkan');
            redirect("Data_Visa/visa312/$id_visa");
        }
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
                $data['check_pt'] = $this->input->post('nama_pt');
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['id_tenaga'] = $this->Data_Visa_Model->getVisa211Sebelumnya($data['visa_sebelumnya']['id']);
                $data['jalan_pintas'] = 1;
                $data['check_pt'] = $this->input->post('nama_pt');
            }
        } else {
            if (($data['data_jenis_visa']['id_visa_sebelumnya'] == 1) or ($data['data_jenis_visa']['id_visa_sebelumnya'] == 2)) {
                $data['id_tenaga'] = $this->Tka_Model->getTkaIdPt();
                $data['jalan_pintas'] = null;
                $data['check_pt'] = null;
            } else {
                $data['visa_sebelumnya'] = $this->Jenis_Visa_Model->getJenisVisaById($data['data_jenis_visa']['id_visa_sebelumnya']);
                $data['id_tenaga'] = $this->Data_Visa_Model->getVisa211Sebelumnya($data['visa_sebelumnya']['id']);
                $data['jalan_pintas'] = 1;
                $data['check_pt'] = null;
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
