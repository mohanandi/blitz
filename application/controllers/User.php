<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/dashboard_header');
        $this->load->view('welcome_message');
        $this->load->view('templates/dashboard_footer');
    }
}