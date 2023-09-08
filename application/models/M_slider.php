<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Model
{
    public function get_slider()
    {
        $query = $this->db->get('tbl_slider');
        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert('tbl_slider', $data);

        var_dump($data);
        die;
    }

    public function update($data, $where)
    {
        $this->db->update('tbl_slider', $data, $where);
        return TRUE;
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('tbl_slider');
        return TRUE;
    }
}