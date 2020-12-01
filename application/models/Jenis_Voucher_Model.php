<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Voucher_Model extends CI_Model
{

    public function getAllProsesVoucher()
    {
        return $this->db->get('jenis_proses')->result_array();
    }
    public function getAllHargaVoucher()
    {
        return $this->db->get('jenis_proses')->result_array();
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}
