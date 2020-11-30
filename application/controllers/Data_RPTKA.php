<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Rptka extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('DataPt_Model');
        $this->load->model('Rptka_Model');
    }
    public function index()
    {
        $data['data_rptka'] = $this->Rptka_Model->getAllRptka();
        $data['judul'] = 'Data RPTKA';
        $this->load->view('templates/header', $data);
        $this->load->view('data_rptka/data_rptka', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama_pt', 'Nama Mandarin', 'required');
        $this->form_validation->set_rules('no_rptka', 'Nama Latin', 'required');
        $this->form_validation->set_rules('tgl_terbit', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('tgl_expired', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        $this->form_validation->set_rules('jumlah_pengguna', 'Jumalah Pengguna RPTKA', "required");
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Data RPTKA';
            $data['subjudul'] = 'Tambah RPTKA';
            $data['button'] = 'Tambahkan RPTKA';
            $data['data_rptka'] = null;
            $data['pt'] = $this->DataPt_Model->getAllDataPt();
            $this->load->view('templates/header', $data);
            $this->load->view('data_rptka/data_rptka_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rptka_Model->TambahRptka();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Data_Rptka');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama_pt', 'Nama Mandarin', 'required');
        $this->form_validation->set_rules('no_rptka', 'Nama Latin', 'required');
        $this->form_validation->set_rules('tgl_terbit', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('tgl_expired', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        $this->form_validation->set_rules('jumlah_pengguna', 'Jumalah Pengguna RPTKA', "required");
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Data RPTKA';
            $data['subjudul'] = 'Tambah RPTKA';
            $data['button'] = 'Tambahkan RPTKA';
            $data['data_rptka'] = $this->Rptka_Model->getRptkaById($id);
            $data['pt'] = $this->DataPt_Model->getAllDataPt();
            $this->load->view('templates/header', $data);
            $this->load->view('data_rptka/data_rptka_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rptka_Model->EditRptka();
            $this->session->set_flashdata('flash', 'RPTKA Berhasil Diubah');
            redirect("Data_Rptka/detail/$id");
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Data RPTKA';
        $data['data_rptka'] = $this->Rptka_Model->getRptkaById($id);
        $data['data_jabatan'] = $this->Rptka_Model->getJabatanByRptka($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data_rptka/data_rptka_detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_jabatan($id)
    {
        $data['data_rptka'] = $this->Rptka_Model->getRptkaById($id);
        $jumlah_rptka = $data['data_rptka']['jumlah_rptka'];

        $this->form_validation->set_rules('nama_jabatan[]', 'Nama Jabatan', 'trim|required', [
            'required' => 'Nama jabatan dan jumlahnya harus diisi terlebih dahulu, Klik Tambah Baris Jabatan untuk memunculkan kolom'
        ]);
        if ($this->input->post('jumlah_jabatan[]')) {
            $jumlah_jabatan = array_sum($this->input->post('jumlah_jabatan[]'));
            if ($jumlah_rptka >= $jumlah_jabatan) {
            } else {
                $this->form_validation->set_rules('jumlah_jabatan[]', 'Jumlah Jabatan', "trim|required|in_list[$jumlah_rptka]", [
                    'in_list' => 'Total Jumlah Jabatan RPTKA tidak sesuai dengan Jumlah Pengguna RPTKA'
                ]);
            }
            $id_rptka = $this->input->post('id_rptka');
        } else {
        }
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Data RPTKA';
            $data['subjudul'] = 'Tambah Jabatan RPTKA';
            $data['button'] = 'Tambahkan Jabatan RPTKA';
            $data['pt'] = $this->DataPt_Model->getAllDataPt();
            $data['data_jabatan'] = null;
            $this->load->view('templates/header', $data);
            $this->load->view('data_rptka/data_rptka_jabatan_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rptka_Model->TambahJabatan();
            $this->session->set_flashdata('flash', 'Jabatan RPTKA Berhasil Ditambahkan');
            redirect("Data_Rptka/detail/$id_rptka");
        }
    }
    public function edit_jabatan($id)
    {
        $data['data_rptka'] = $this->Rptka_Model->getRptkaById($id);
        $jumlah_rptka = $data['data_rptka']['jumlah_rptka'];

        $this->form_validation->set_rules('nama_jabatan[]', 'Nama Jabatan', 'trim|required', [
            'required' => 'Nama jabatan dan jumlahnya harus diisi terlebih dahulu, Klik Tambah Baris Jabatan untuk memunculkan kolom'
        ]);
        if ($this->input->post('jumlah_jabatan[]')) {
            $jumlah_jabatan = array_sum($this->input->post('jumlah_jabatan[]'));
            if ($jumlah_jabatan == $jumlah_rptka) {
            } else {
                $this->form_validation->set_rules('jumlah_jabatan[]', 'Jumlah Jabatan', "trim|required|in_list[$jumlah_rptka]", [
                    'in_list' => 'Total Jumlah Jabatan RPTKA tidak sesuai dengan Jumlah Pengguna RPTKA'
                ]);
            }
            $id_rptka = $this->input->post('id_rptka');
        } else {
        }
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Data RPTKA';
            $data['subjudul'] = 'Edit Jabatan RPTKA';
            $data['button'] = 'Simpan Edit Jabatan RPTKA';
            $data['pt'] = $this->DataPt_Model->getAllDataPt();
            $data['data_jabatan'] = $this->Rptka_Model->getJabatanByRptka($id);
            $this->load->view('templates/header', $data);
            $this->load->view('data_rptka/data_rptka_jabatan_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rptka_Model->EditJabatan();
            $this->session->set_flashdata('flash', 'Jabatan RPTKA Berhasil Dirubah');
            redirect("Data_Rptka/detail/$id_rptka");
        }
    }
}
