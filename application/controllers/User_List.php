<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_List extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_Model');
    }
    public function index()
    {
        $data['judul'] = 'User List';
        $data['user'] = $this->User_Model->get_user();
        $this->load->view('templates/header', $data);
        $this->load->view('user/user_list', $data);
        $this->load->view('templates/footer');
    }
}
