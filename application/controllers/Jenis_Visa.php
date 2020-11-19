<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Visa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Visa';
        $this->load->view('templates/header', $data);
        $this->load->view('jenis_visa');
        $this->load->view('templates/footer');
    }
}
