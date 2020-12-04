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
        return $this->db->get('harga')->result_array();
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function TambahJenisProses()
    {

        $data = [
            "nama_proses" => $this->input->post('nama_proses', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('jenis_proses', $data);
    }
    public function TambahHarga()
    {

        $data = [
            "id_proses" => $this->input->post('jenis_proses', true),
            "lokasi" => $this->input->post('lokasi', true),
            "rupiah" => $this->input->post('rupiah', true),
            "dollar" => $this->input->post('dollar', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('harga', $data);
    }
}
