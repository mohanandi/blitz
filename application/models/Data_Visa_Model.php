<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Visa_Model extends CI_Model
{

    public function ge($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getAllvisa211($id)
    {
        return $this->db->get_where('penghubung_visa211', ['id_jenis_visa' => $id])->result_array();
    }
    public function getAllVisa312($id)
    {
        return $this->db->get_where('penghubung_visa312', ['id_jenis_visa' => $id])->result_array();
    }
}
