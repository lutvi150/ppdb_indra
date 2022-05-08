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
        $update = [
            'jenis_setting' => $jenis,
            'setting' => $tanggal,
        ];
        $this->model->updateData('tbl_setting', 'id_setting', $id_pengumuman, $update);
        $respon = [
            'status' => 'success',
            'message' => 'Data berhasil diupdate',
        ];
        echo json_encode($respon);
    }

}

/* End of file  ApiAdmin.php */
