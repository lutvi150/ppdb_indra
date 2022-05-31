<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ApiAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
    }
    public function updateSetting(Type $var = null)
    {
        $id_pengumuman = $this->input->post('id');
        $tanggal = $this->input->post('tgl_pengumuman');
        $jenis = $this->input->post('jenis');
        // use for check status kelulusan user

        $update = [
            'jenis_setting' => $jenis,
            'setting' => $tanggal,
        ];
        $this->model->updateData('tbl_setting', 'id_setting', $id_pengumuman, $update);
        $updateKelulusan = [];
        if ($jenis == 'total_lulus' || $jenis == 'nilai_minimal') {
            $updateKelulusan = $this->prosesUserLulus();
        }
        $respon = [
            'status' => 'success',
            'message' => 'Data berhasil diupdate',
            'update_kelulusan' => $updateKelulusan,
        ];
        echo json_encode($respon);
    }
    public function prosesUserLulus(Type $var = null)
    {
        $start = microtime(true);
        $nilai_minimal = $this->model->findData('tbl_setting', 'jenis_setting', 'nilai_minimal')->row()->setting;
        $total_lulus = $this->model->findData('tbl_setting', 'jenis_setting', 'total_lulus')->row()->setting;
        $pesertaLulus = $this->model->getDataUserLulus((int) $total_lulus, $nilai_minimal);
        $idUpdate = [];
        if ($pesertaLulus != null) {
            foreach ($pesertaLulus as $key => $value) {
                $idUpdate[] = $value->id_user;
            }
        }
        $this->model->updateStatusKelulusan('status', ['process'], ['kelulusan' => 'tidak lulus']);
        if ($idUpdate != null) {
            $this->model->updateStatusKelulusan('id_user', $idUpdate, ['kelulusan' => 'lulus'], $idUpdate);
        }
        $keteranganData = $idUpdate == null ? "kosong" : "ada";
        $respon = [
            'status' => 'success',
            'elapsed_time' => microtime(true) - $start,
            'data' => $idUpdate,
            'total_lulus' => (int) $total_lulus,
            'keterangan' => $keteranganData,
        ];
        return $respon;
        // echo json_encode($respon);

    }
}

/* End of file  ApiAdmin.php */
