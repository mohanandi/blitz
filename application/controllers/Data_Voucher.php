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
        $this->form_validation->set_rules('dari', 'Dari', 'trim|required');
        $this->form_validation->set_rules('sampai', 'Sampai', 'trim|required');
        $this->form_validation->set_rules('nama_pt', 'Nama Perusahaan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['data_id_voucher'] = $this->Data_Voucher_Model->getVoucherVisa();
            $data['data_id_voucher_entertaint'] = $this->Data_Voucher_Model->getVoucherEntertaint();
            $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
            $data['judul'] = 'Data Voucher';
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/data_voucher', $data);
            $this->load->view('templates/footer');
        } else {
            $dari = strtotime($this->input->post('dari'));
            $sampai = strtotime($this->input->post('sampai')) + (60 * 60 * 24);
            $id_pt = $this->input->post('nama_pt');
            $data['data_id_voucher'] = $this->Data_Voucher_Model->getVoucherVisaFilter($id_pt, $dari, $sampai);
            $data['data_id_voucher_entertaint'] = $this->Data_Voucher_Model->getVoucherEntertaintFilter($id_pt, $dari, $sampai);
            $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
            $data['judul'] = 'Data Voucher';
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/data_voucher', $data);
            $this->load->view('templates/footer');
        }
    }
    public function report()
    {
        $data['data_id_voucher'] = $this->Data_Voucher_Model->getVoucherVisa();
        $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
        $data['judul'] = 'Data Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/data_voucher_report', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id_voucher)
    {
        $data['data_voucher'] = $this->Data_Voucher_Model->getVoucherVisaById($id_voucher);
        $data['data_pengguna_voucher'] = $this->Data_Voucher_Model->getPenggunaVoucherVisa($id_voucher);
        $data['judul'] = 'Data Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/data_vouchervisa_detail', $data);
        $this->load->view('templates/footer');
    }
    public function kategori()
    {
        $this->form_validation->set_rules('nama_pt', 'Nama Perusahaan', 'trim|required');
        $this->form_validation->set_rules('nama_client', 'Nama Client', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        if ($this->input->post('kategori') == 1) {
            $this->form_validation->set_rules('jenis_proses', 'Jenis Proses', 'trim|required');
            $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        } else {
        }
        $this->form_validation->set_rules('staff', 'Staff OP', 'trim|required');
        $this->form_validation->set_rules('note', 'Note', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'data_jenis_proses' => $this->Data_Voucher_Model->getJenisProses(),
                'data_lokasi' => $this->Data_Voucher_Model->getLokasi()
            );
            $data['data_pt'] = $this->DataPt_Model->getAllDataPt();
            $data['judul'] = 'Data Voucher';
            $data['button'] = 'Buat Voucher';
            $data['data_kategori'] = $this->Data_Voucher_Model->getKategori();
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/kategori_form', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('kategori') == 1) {
                $this->input->post();
                $this->data_visa();
            } else {
                $kode = $this->Data_Voucher_Model->getKodeVoucherEntertaint();
                $this->Data_Voucher_Model->tambahVoucherEntertaint($kode);
                $data_voucher = $this->Data_Voucher_Model->getLastKodeEntertaint();
                $id_voucher = $data_voucher['id_voucher'];
                redirect("Data_Voucher/detail_entertaint/$id_voucher");
            }
        }
    }

    public function detail_entertaint($id_voucher)
    {
        $data['data_voucher'] = $this->Data_Voucher_Model->getVoucherEntertaintById($id_voucher);
        $data['data_pengguna_voucher'] = $this->Data_Voucher_Model->getPenggunaVoucherEntertaint($id_voucher);
        $data['judul'] = 'Data Voucher';
        $data['button'] = 'Buat Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/entertaint_detail', $data);
        $this->load->view('templates/footer');
    }
    public function data_visa()
    {
        $data['judul'] = 'Data Voucher';
        $data['button'] = 'Buat Voucher';
        $data['id_pt'] = $this->input->post('nama_pt');
        $data['data_tka'] = $this->Data_Voucher_Model->getTkaIdByPt($this->input->post('nama_pt'));
        $data['nama_client'] = $this->input->post('nama_client');
        $data['id_kategori'] = $this->input->post('kategori');
        $data['id_jenis_proses'] = $this->input->post('jenis_proses');
        $data['lokasi'] = $this->input->post('lokasi');
        $data['mata_uang'] = $this->input->post('mata_uang');
        $data['staff'] = $this->input->post('staff');
        $data['note'] = $this->input->post('note');
        $this->load->view('templates/header', $data);
        $this->load->view('data_voucher/data_visa', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_voucher_entertaint($id_voucher)
    {
        $data = array(
            'data_jenis_proses' => $this->Data_Voucher_Model->getJenisProses(),
            'data_lokasi' => $this->Data_Voucher_Model->getLokasi()
        );
        $this->form_validation->set_rules('nama', 'Total Harga', 'trim');
        $this->form_validation->set_rules('jenis_proses', 'Jenis Proses', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['data_voucher'] = $this->Data_Voucher_Model->getVoucherEntertaintById($id_voucher);
            $data['judul'] = 'Data Voucher';
            $data['button'] = 'Tambahkan Data Voucher';
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/entertaint_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_Voucher_Model->tambahDataVoucherEntertaint();
            $voucher = $this->Data_Voucher_Model->getVoucherEntertaintById($this->input->post('id_voucher'));
            $total_harga = $voucher['total_harga'] + $this->input->post('harga');
            $jumlah_data = $voucher['jumlah_data'] + 1;
            $this->Data_Voucher_Model->updateDataEntertaint($total_harga, $jumlah_data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect("Data_Voucher/detail_entertaint/$id_voucher");
        }
    }

    public function tambahvouchervisa()
    {
        $this->form_validation->set_rules('total', 'Total Harga', 'trim|required');
        $this->form_validation->set_rules('harga[]', 'Harga', 'trim|required');

        $data['id_tka'] = $this->input->post('data_tka[]');
        $data['id_pt'] = $this->input->post('nama_pt');
        $data['nama_client'] = $this->input->post('nama_client');
        $data['id_kategori'] = $this->input->post('kategori');
        $data['id_jenis_proses'] = $this->input->post('jenis_proses');
        $data['lokasi'] = $this->input->post('lokasi');
        $data['mata_uang'] = $this->input->post('mata_uang');
        $data['staff'] = $this->input->post('staff');
        $data['note'] = $this->input->post('note');
        $data['judul'] = 'Data Voucher';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/visa_form', $data);
            $this->load->view('templates/footer');
        } else {
            $kode = $this->Data_Voucher_Model->getKodeVoucher();
            $this->Data_Voucher_Model->tambahVoucherVisa($kode);
            $id_voucher = $this->Data_Voucher_Model->getLastKode();
            $this->Data_Voucher_Model->tambahPenggunaVoucherVisa($id_voucher['id_voucher']);
            $this->session->set_flashdata('flash', 'Voucher Berhasil Dibuat');
            redirect("Data_Voucher");
        }
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

    public function delete_data_entertaint($id_pengguna)
    {
        $data_voucher = $this->Data_Voucher_Model->getIdVoucherEntertaint($id_pengguna);
        $id_voucher = $data_voucher['id_voucher_entertaint'];
        $this->Data_Voucher_Model->hapusDataPenggunaEntertaint($id_pengguna);
        $data = $this->Data_Voucher_Model->getHargaVoucherEntertaint($id_voucher);
        $total_harga = 0;
        foreach ($data as $d) :
            $total_harga += $d['harga'];
        endforeach;
        $jumlah_data = count($data);;
        $this->Data_Voucher_Model->ubahDataEntertaint($total_harga, $jumlah_data, $id_voucher);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect("Data_Voucher/detail_entertaint/$id_voucher");
    }
    public function delete_data_visa($id_pengguna)
    {
        $data_voucher = $this->Data_Voucher_Model->getIdVoucherEntertaint($id_pengguna);
        $id_voucher = $data_voucher['id_voucher_entertaint'];
        $this->Data_Voucher_Model->hapusDataPenggunaEntertaint($id_pengguna);
        $data = $this->Data_Voucher_Model->getHargaVoucherEntertaint($id_voucher);
        $total_harga = 0;
        foreach ($data as $d) :
            $total_harga += $d['harga'];
        endforeach;
        $jumlah_data = count($data);;
        $this->Data_Voucher_Model->ubahDataEntertaint($total_harga, $jumlah_data, $id_voucher);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect("Data_Voucher/detail_entertaint/$id_voucher");
    }
    public function ubah_data_entertaint($id_pengguna)
    {
        $data = array(
            'data_jenis_proses' => $this->Data_Voucher_Model->getJenisProses(),
            'data_lokasi' => $this->Data_Voucher_Model->getLokasi()
        );
        $this->form_validation->set_rules('nama', 'Total Harga', 'trim');
        $this->form_validation->set_rules('jenis_proses', 'Jenis Proses', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        $data['data_pengguna_voucher'] = $this->Data_Voucher_Model->getPenggunaVoucherEntertaintById($id_pengguna);
        $id_voucher = $data['data_pengguna_voucher']['id_voucher_entertaint'];
        if ($this->form_validation->run() == FALSE) {
            $data['data_voucher'] = $this->Data_Voucher_Model->getVoucherEntertaintById($id_voucher);
            $data['judul'] = 'Data Voucher';
            $data['button'] = 'Simpan Edit Data Voucher';
            $this->load->view('templates/header', $data);
            $this->load->view('data_voucher/entertaint_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_Voucher_Model->ubahDataPenggunaVoucherEntertaint($id_pengguna);
            $data = $this->Data_Voucher_Model->getHargaVoucherEntertaint($id_voucher);
            $total_harga = 0;
            foreach ($data as $d) :
                $total_harga += $d['harga'];
            endforeach;
            $jumlah_data = count($data);;
            $this->Data_Voucher_Model->ubahDataEntertaint($total_harga, $jumlah_data, $id_voucher);
            $this->session->set_flashdata('flash', 'Dirubah');
            redirect("Data_Voucher/detail_entertaint/$id_voucher");
        }
    }
}
