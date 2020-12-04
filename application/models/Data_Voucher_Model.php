<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Voucher_Model extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori_voucher')->result_array();
    }
}
