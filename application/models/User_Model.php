<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getPic()
    {
        return $this->db->get_where('user', ['pic_pt' => 'Aktif'])->result_array();
    }
    public function get_user()
    {
        $query = "SELECT `user`.*, `role`.`role`
        FROM `user` JOIN `role`
        ON `user`.`role_id` = `role`.`id`
      ";
        return $this->db->query($query)->result_array();
    }

    public function lastLogin($id)
    {
        $data = [
            "last_login" => time()
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
