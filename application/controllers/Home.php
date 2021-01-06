<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Home_Model');
    }

    public function index()
    {
        // $data = $this->Home_Model->getData(9);
        // $jumlah_visa_minggu = array();
        // var_dump($data);
        // echo "<br>";
        // echo date('d-m-Y', time() + (60 * 60 * 24 * 7));
        $data['jumlah_rptka'] = $this->Home_Model->jumlahRptka();
        $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
        $data['jumlah_voucher'] = $this->Home_Model->jumlahVoucher();
        $data['data_visa'] = $this->Home_Model->getDataJenisVisa();
        // foreach ($data['data_visa']['id'] as $visa) :
        //     $jumlah = $this->Home_Model->getData($visa['id']);
        //     array_push($jumlah, $jumlah_visa_minggu);
        // endforeach;
        // var_dump($jumlah_visa_minggu);
        $data['judul'] = "Reminder Schedule";
        $this->load->view('templates/header', $data);
        $this->load->view('report/home', $data);
        $this->load->view('templates/footer');
    }
    public function perusahaan()
    {
        // $data = $this->Home_Model->getData(9);
        // $jumlah_visa_minggu = array();
        // var_dump($data);
        // echo "<br>";
        // echo date('d-m-Y', time() + (60 * 60 * 24 * 7));
        $this->form_validation->set_rules('dari', 'Dari', 'trim|required');
        $this->form_validation->set_rules('sampai', 'Sampai', 'trim|required');
        $this->form_validation->set_rules('nama_pt', 'Nama Perusahaan', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['jumlah_rptka'] = $this->Home_Model->jumlahRptka();
            $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
            $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
            $data['jumlah_voucher'] = $this->Home_Model->jumlahVoucher();
            $data['data_visa'] = $this->Home_Model->getDataJenisVisa();
            $data['data_pt'] = $this->Home_Model->getPt();
        } else {
            $data['jumlah_rptka'] = $this->Home_Model->jumlahRptka(strtotime($this->input->post('dari')), strtotime($this->input->post('sampai')), $this->input->post('nama_pt'));
            $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
            $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
            $data['jumlah_voucher'] = $this->Home_Model->jumlahVoucher();
            $data['data_visa'] = $this->Home_Model->getDataJenisVisa();
            if ($this->input->post('nama_pt') == 'Semua Perusahaan') {
                $data['data_pt'] = $this->Home_Model->getPt();
            } else {
                $data['data_pt'] = $this->Home_Model->getPt();
            }
        }
        // foreach ($data['data_visa']['id'] as $visa) :
        //     $jumlah = $this->Home_Model->getData($visa['id']);
        //     array_push($jumlah, $jumlah_visa_minggu);
        // endforeach;
        // var_dump($jumlah_visa_minggu);
        $data['judul'] = "Report By Perusahaan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('report/report', $data);
        $this->load->view('templates/footer');
    }
    public function proses()
    {
        // $data = $this->Home_Model->getData(9);
        // $jumlah_visa_minggu = array();
        // var_dump($data);
        // echo "<br>";
        // echo date('d-m-Y', time() + (60 * 60 * 24 * 7));
        $this->form_validation->set_rules('dari', 'Dari', 'trim|required');
        $this->form_validation->set_rules('sampai', 'Sampai', 'trim|required');
        $this->form_validation->set_rules('nama_pt', 'Nama Perusahaan', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['jumlah_rptka'] = $this->Home_Model->jumlahRptka();
            $data['jumlah_tka'] = $this->Home_Model->jumlahTka();
            $data['jumlah_pt'] = $this->Home_Model->jumlahPt();
            $data['jumlah_voucher'] = $this->Home_Model->jumlahVoucher();
            $data['data_visa'] = $this->Home_Model->getDataJenisVisa();
            $data['data_pt'] = $this->Home_Model->getPt();
        } else {
        }
        // foreach ($data['data_visa']['id'] as $visa) :
        //     $jumlah = $this->Home_Model->getData($visa['id']);
        //     array_push($jumlah, $jumlah_visa_minggu);
        // endforeach;
        // var_dump($jumlah_visa_minggu);
        $data['judul'] = "Report By Proccess";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('report/report', $data);
        $this->load->view('templates/footer');
    }
}
