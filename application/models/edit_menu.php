<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Edit_Menu extends CI_Model
{
    public function getEdit()
    {
        $this->db->select('*');
        $this->db->from('edit');
        $query = $this->db->get();
        return $query->result();

    }
    public function ChangeEdit($id)
    {
        return $this->db->get_where('menu', array('id' => $id));
    }

    public function EditMenu($data, $id)
    {
        $this->db->update('menu', $data, array("id" => $id));
    }
}