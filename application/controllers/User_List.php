<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_List extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'User List';
        $this->load->view('templates/header', $data);
        $this->load->view('user_list');
        $this->load->view('templates/footer');
    }
}
