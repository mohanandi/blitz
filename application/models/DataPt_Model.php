<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPt_Model extends CI_Model
{

    public function getAllDatapt()
    {
        $this->db->order_by('nama_pt', 'ASC');
        return $this->db->get('pt')->result_array();
    }
    public function tambahDataPt()
    {
        $data = [
            "nama_pt" => $this->input->post('namapt', true),
            "pic" => $this->input->post('pic', true),
            "nama_client" => $this->input->post('client', true),
            "alamat" => $this->input->post('alamat', true),
            "keterangan" => $this->input->post('keterangan', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('pt', $data);
    }
    public function getPtById($id)
    {
        return $this->db->get_where('pt', ['id' => $id])->row_array();
    }

    public function hapusDataPt($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pt');
    }

    public function ubahData()
    {
        $data = [
            "nama_pt" => $this->input->post('namapt', true),
            "pic" => $this->input->post('pic', true),
            "nama_client" => $this->input->post('client', true),
            "alamat" => $this->input->post('alamat', true),
            "keterangan" => $this->input->post('keterangan', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pt', $data);
    }
}
