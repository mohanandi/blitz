<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Voucher extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Jenis Proses Voucher';
        $this->load->view('templates/header', $data);
        $this->load->view('jenis_voucher');
        $this->load->view('templates/footer');
    }
}
