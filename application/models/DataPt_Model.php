<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPt_Model extends CI_Model
{

 public function getAllDatapt()
 {
  return $this->db->get('pt')->result_array();
 }
 public function tambahData()
 {
  $data = [
   "id" => $this->session->userdata('id'),
   "nama_pt" => $this->input->post('namapt', true),
   "pic" => $this->input->post('pic', true),
   "nama_client" => $this->input->post('client', true),
   "alamat" => $this->input->post('alamat', true),
   "keterangan" => $this->input->post('keterangan', true),
   "input_by_id" => $this->session->userdata('id'),
   "tgl_input" => $this->session->userdata('id')
  ];
  $this->db->insert('pt', $data);
 }
 public function check($id)
 {
  return $this->db->get_where('pt', ['id' => $id])->row_array();
 }
}
