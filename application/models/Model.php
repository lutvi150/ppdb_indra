<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
    public function insertData($table, $object)
    {
        $this->db->insert($table, $object);
    }
    public function findData($table, $reference, $id)
    {
        $this->db->from($table);
        $this->db->where($reference, $id);
        return $this->db->get();
    }
    public function deleteData($table, $reference, $id)
    {
        $this->db->where($reference, $id);
        $this->db->delete($table);
    }
    public function getData($table, $reference, $order)
    {
        $this->db->from($table);
        $this->db->order_by($reference, $order);
        return $this->db->get()->result();
    }
    public function getDataPengumuman(Type $var = null)
    {
        $this->db->from('tbl_pengumuman');
        $this->db->order_by('id_pengumuman', 'desc');
        $this->db->limit(6);
        return $this->db->get()->result();
    }
    // use for check account
    public function checkAccount($username, $password, $role)
    {
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', hash('sha512', $password));
        $this->db->where('role', $role);
        return $this->db->get()->row();

    }

}

/* End of file Model.php */
