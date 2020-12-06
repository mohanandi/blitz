<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Voucher_Model extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori_voucher')->result_array();
    }
    public function getTkaIdByPt($id)
    {
        $this->db->select(array('id', 'passport', 'nama_mandarin', 'nama_latin'));
        $this->db->from('tka');
        $this->db->where('id_pt', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}
