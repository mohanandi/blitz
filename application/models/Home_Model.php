<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Model extends CI_Model
{
    public function jumlahVisa()
    {
        $this->db->select('id');
        $this->db->from('jenis_visa');
        $this->db->where('id !=', 1);
        $this->db->where('id !=', 2);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getDataJenisVisa()
    {
        $this->db->order_by('visa', 'ASC');
        $this->db->select('*');
        $this->db->from('jenis_visa');
        $this->db->where('id !=', 1);
        $this->db->where('id !=', 2);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function jumlahTka()
    {
        $this->db->select('id');
        $this->db->from('tka');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahPt()
    {
        $this->db->select('id');
        $this->db->from('pt');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahVoucher()
    {
        $this->db->select('id_voucher');
        $this->db->from('voucher_visa');
        $query = $this->db->get();
        $voucher_visa = $query->num_rows();
        $this->db->select('id_voucher');
        $this->db->from('voucher_entertaint');
        $query = $this->db->get();
        $voucher_entertaint = $query->num_rows();
        $total_voucher = $voucher_visa + $voucher_entertaint;
        return $total_voucher;
    }
}
