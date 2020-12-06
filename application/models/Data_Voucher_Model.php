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
    public function getVoucherVisa()
    {
        $this->db->select('id_voucher');
        $this->db->from('voucher_visa');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPenggunaVoucherVisa($id_voucher)
    {
        $this->db->select(array('id_tka', 'harga'));
        $this->db->from('pengguna_voucher_visa');
        $this->db->where('id_voucher_visa', $id_voucher);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getVoucherVisaById($id_voucher)
    {
        return $this->db->get_where('voucher_visa', ['id_voucher' => $id_voucher])->row_array();
    }
    public function getJenisProses()
    {
        return $this->db->get('jenis_proses')->result();
    }

    // Untuk mendapatkan pilihan Jabatan
    public function getLokasi()
    {
        $this->db->join('jenis_proses', 'harga.id_proses = jenis_proses.id_proses');
        return $this->db->get('harga')->result();
    }

    public function tambahVoucherVisa($kode_voucher)
    {
        $data = [
            "kode_voucher" => $kode_voucher,
            "id_pt" => $this->input->post('nama_pt', true),
            "jumlah_data" => count($this->input->post('id_tka[]')),
            "nama_client" => $this->input->post('nama_client', true),
            "mata_uang" => $this->input->post('mata_uang', true),
            "total_harga" => $this->input->post('total', true),
            "kategori_id" => $this->input->post('kategori', true),
            "lokasi" => $this->input->post('lokasi', true),
            "staff" => $this->input->post('staff', true),
            "note" => $this->input->post('note', true),
            "input_by_id" => $this->session->userdata('id'),
            "tgl_input" => time()
        ];
        $this->db->insert('voucher_visa', $data);
    }

    public function getKodeVoucher()
    {
        $last = $this->db->order_by('id_voucher', "desc")
            ->select('kode_voucher')
            ->limit(1)
            ->get('voucher_visa')
            ->row_array();
        if ($last) {
            $tanda_tgl = substr($last['kode_voucher'], 9, 6);
            if ($tanda_tgl == date('dmy', time())) {
                $no = substr($last['kode_voucher'], 16);
                $no++;
                $kode = 'VCR/VISA/' . date('dmy', time()) . '/' . $no;
            } else {
                $kode = 'VCR/VISA/' . date('dmy', time()) . '/' . '1';
            }
        } else {
            $kode = 'VCR/VISA/' . date('dmy', time()) . '/' . '1';
        }
        return $kode;
    }
    public function getLastKode()
    {
        $last = $this->db->order_by('id_voucher', "desc")
            ->select('id_voucher')
            ->limit(1)
            ->get('voucher_visa')
            ->row_array();
        return $last;
    }

    public function tambahPenggunaVoucherVisa($id_voucher)
    {
        for ($i = 0; $i < count($this->input->post('id_tka[]')); $i++) {
            $data = [
                "id_voucher_visa" => $id_voucher,
                "id_tka" => $this->input->post("id_tka[$i]", true),
                "harga" => $this->input->post("harga[$i]", true)
            ];
            $this->db->insert('pengguna_voucher_visa', $data);
        }
    }
}
