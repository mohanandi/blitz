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
    public function get_jenis_visa()
    {
        $this->db->select('id');
        $this->db->from('jenis_visa');
        $this->db->where('id !=', 1);
        $this->db->where('id !=', 2);
        $query = $this->db->get();
        return $query->num_rows();
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
}
