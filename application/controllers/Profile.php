<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_Model');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'User Profile';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['data'] = $this->Profile_Model->check($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('user_profile', $data);
        $this->load->view('templates/footer');
    }
}
