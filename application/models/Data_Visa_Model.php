<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa_Model extends CI_Model
{

    public function getPenghubungVisa211()
    {
        $this->db->select('id_penghubung_visa211');
        $this->db->from('penghubung_visa211');
        $this->db->where('id_jenis_visa', $this->input->post('id_visa'));
        $this->db->where('id_tka', $this->input->post('id_tka'));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getVisaSebelumnya($id_visa)
    {
        $this->db->select('id_tka');
        $this->db->from('penghubung_visa211');
        $this->db->where('id_jenis_visa', $id_visa);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllvisa211($id)
    {
        return $this->db->get_where('penghubung_visa211', ['id_jenis_visa' => $id])->result_array();
    }
    public function getAllVisa312($id)
    {
        return $this->db->get_where('penghubung_visa312', ['id_jenis_visa' => $id])->result_array();
    }
    public function tambahVisa211($id_penghubung)
    {
        $data = [
            "id_penghubung" => $id_penghubung,
            "tgl_awal" => strtotime($this->input->post('tgl_awal', true)),
            "tgl_expired" => strtotime($this->input->post('tgl_expired', true)),
            "ket" => $this->input->post('ket', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('visa_211', $data);
    }
    public function tambahPenghubungVisa211()
    {
        $data = [
            "id_tka" => $this->input->post('id_tka', true),
            "id_jenis_visa" => $this->input->post('id_visa', true),
            "status" => 'Aktif'
        ];
        $this->db->insert('penghubung_visa211', $data);
    }
}
