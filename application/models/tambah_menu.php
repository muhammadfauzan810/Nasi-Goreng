<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tambah_Menu extends CI_Model
{
    public function getMenu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();
        return $query->result();

    }

    public function InsertMenu($data)
    {
        $this->db->insert('menu', $data);
    }
}