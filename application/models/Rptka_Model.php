<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rptka_Model extends CI_Model
{
    public function getAllRptka()
    {
        return $this->db->get_where('rptka')->result_array();
    }
    public function getRptkaById($id)
    {
        return $this->db->get_where('rptka', ['id' => $id])->row_array();
    }
    public function getJabatanByRptka($id)
    {
        return $this->db->get_where('jabatan_rptka', ['id_rptka' => $id])->result_array();
    }
    public function TambahRptka()
    {
        $data = [
            "id_pt" => $this->input->post('nama_pt', true),
            "no_rptka" => $this->input->post('no_rptka', true),
            "tgl_terbit" => strtotime($this->input->post('tgl_terbit', true)),
            "tgl_expired" => strtotime($this->input->post('tgl_expired', true)),
            "jumlah_rptka" => $this->input->post('jumlah_pengguna', true),
            "ket" => $this->input->post('ket', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('rptka', $data);
    }
    public function TambahJabatan()
    {
        for ($i = 0; $i < count($this->input->post('nama_jabatan[]')); $i++) {
            $data = [
                "id_rptka" => $this->input->post('id_rptka', true),
                "jabatan" => strtotime($this->input->post("nama_jabatan[$i]", true)),
                "jumlah" => strtotime($this->input->post("jumlah_jumlah[$i]", true))
            ];
            $this->db->insert('jabatan_rptka', $data);
        }
    }
    public function EditUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "role_id" => $this->input->post('role_id', true),
            "pic_pt" => $this->input->post('pic_pt', true),
            "is_active" => $this->input->post('is_active', true),
        ];
        $this->db->where('id', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }
}
