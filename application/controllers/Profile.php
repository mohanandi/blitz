<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'User Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('user_profile');
        $this->load->view('templates/footer');
    }
}
