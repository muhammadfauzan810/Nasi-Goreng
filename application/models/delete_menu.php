<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Delete_Menu extends CI_Model
{
    public function getDelete($id)
    {
        $this->db->delete('menu', array('id' => $id));

    }
}