<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
    public function insertData($table, $object)
    {
        $this->db->insert($table, $object);
        $insert_id = $this->db->insert_id();
        return $insert_id;
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
    public function updateData($table, $reference, $id, $object)
    {
        $this->db->where($reference, $id);
        $this->db->update($table, $object);
    }
    public function insertBacth($table, $object)
    {
        $this->db->insert_batch($table, $object);

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
    public function checkNilai($id_user, $jenis_nilai)
    {
        $this->db->from('tbl_nilai');
        $this->db->where('id_user', $id_user);
        $this->db->where('jenis_nilai', $jenis_nilai);
        return $this->db->get()->row();
    }
    public function findAttachment($id_user, $id_attachment)
    {
        $this->db->from('tbl_lampiran');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_attachment', $id_attachment);
        return $this->db->get()->row();
    }
    public function updateAttachment($id_user, $id_attachment, $object)
    {
        $this->db->where('id_user', $id_user);
        $this->db->where('id_attachment', $id_attachment);
        $this->db->update('tbl_lampiran', $object);
    }
    public function getDataMember(Type $var = null)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->join('tbl_user', 'tbl_pendaftar.id_user = tbl_user.id_user');
        $this->db->where_not_in('tbl_pendaftar.status', ['draft']);
        $this->db->order_by('tbl_pendaftar.id_user', 'desc');
        return $this->db->get()->result();
    }
    public function getDataPendaftar(Type $var = null)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->where_not_in('tbl_pendaftar.status', ['draft']);
        $this->db->join('tbl_user', 'tbl_pendaftar.id_user = tbl_user.id_register');
        return $this->db->get()->result();
    }
    public function getDataMemberSpesifik($id_user)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->join('tbl_user', 'tbl_pendaftar.id_user = tbl_user.id_register');
        $this->db->where('tbl_pendaftar.id_user', $id_user);
        return $this->db->get()->row();

    }
    public function getSetting($jenis)
    {
        $this->db->from('tbl_setting');
        $this->db->where('jenis_setting', $jenis);
        return $this->db->get()->row();
    }
    public function getDataSiswaKelulusan($status)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->join('tbl_user', 'tbl_pendaftar.id_user = tbl_user.id_register');
        $this->db->where_in('tbl_pendaftar.kelulusan', [$status]);
        $this->db->order_by('tbl_pendaftar.id_user', 'desc');
        return $this->db->get()->result();
    }
    public function getDataUserLulus($total_lulus, $nilai_minimal)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->join('tbl_user', 'tbl_pendaftar.id_user = tbl_user.id_register');
        $this->db->where_not_in('tbl_pendaftar.status', ['draft']);
        $this->db->where('nilai_rata_rata >=', $nilai_minimal);
        $this->db->order_by('tbl_pendaftar.nilai_rata_rata', 'desc');
        $this->db->limit($total_lulus);
        return $this->db->get()->result();
    }
    public function updateStatusKelulusan($reference, $id_lulus, $object)
    {
        $this->db->where_in($reference, $id_lulus);
        $this->db->update('tbl_pendaftar', $object);
    }
    public function getDataByYear($year, $status)
    {
        $this->db->from('tbl_pendaftar');
        $this->db->where('kelulusan', $status);
        $this->db->where('SUBSTR(tgl_daftar,1,4)', $year);
        return $this->db->get()->result();
    }
    // get data for chart
    public function getDataChart($jenis, $tanggal, $status)
    {
        $this->db->from('tbl_pendaftar');
        if ($jenis == 'tahun') {
            $this->db->where('SUBSTRING(tgl_daftar,1,7)', $tanggal);
        } else if ($jenis == 'bulan') {
            $this->db->where('tgl_daftar', $tanggal);
        }
        if ($status !== 'all') {
            $this->db->where('kelulusan', $status);
        }
        return $this->db->count_all_results();
    }
    public function getDataSiswaLaporan($jenis, $tanggal)
    {
        $this->db->from('tbl_pendaftar');
        if ($jenis == 'tahun') {
            $this->db->where('SUBSTRING(tgl_daftar,1,4)', $tanggal);
        } else if ($jenis == 'bulan') {
            $this->db->where('SUBSTRING(tgl_daftar,1,7)', $tanggal);
        }
        // if ($status !== 'all') {
        //     $this->db->where('kelulusan', $status);
        // }
        return $this->db->get()->result();
    }

}

/* End of file Model.php */
