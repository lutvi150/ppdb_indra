<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
        $this->load->model('ModelCount', 'modelCount');

    }

    public function index()
    {
        $data['countPendaftar'] = $this->modelCount->countFromTable('tbl_pendaftar');
        $data['countGaleri'] = $this->modelCount->countFromTable('tbl_galeri');
        $data['countAdmin'] = $this->model->findData('tbl_user', 'role', 'admin')->num_rows();
        $data['countRegister'] = $this->model->findData('tbl_user', 'role', 'siswa')->num_rows();
        $data['pengumuman'] = $this->modelCount->countFromTable('tbl_pengumuman');
        $data['lulus'] = $this->model->findData('tbl_pendaftar', 'konfirmasi', 'lulus')->num_rows();
        $data['tidak_lulus'] = $this->model->findData('tbl_pendaftar', 'konfirmasi', 'tidak_lulus')->num_rows();
        $data['content'] = "admin/home";
        $this->load->view('admin/index', $data, false);

    }
    public function dataAdmin(Type $var = null)
    {
        $data['admin'] = $this->model->findData('tbl_user', 'role', 'admin')->result();
        $data['content'] = 'admin/data_admin';
        $this->load->view('admin/index', $data, false);
    }
    public function addAdmin(Type $var = null)
    {
        $insertData = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
        ];
        $this->model->insertData('tbl_user', $insertData);
        $this->session->set_flashdata('success', 'Data Admin berhasil di tambahkan');
        redirect('controllerAdmin/dataAdmin');

    }
    public function deleteAdmin(Type $var = null)
    {
        $id_register = $this->input->post('id_register');
        $this->model->deleteData('tbl_user', $id_register, $id_register);
        $this->session->set_flashdata('success', 'Data berhasil di hapus');
        redirect('controllerAdmin/dataAdmin');
    }
    public function editData(Type $var = null)
    {
        $id_register = $this->input->post('id_register');
        $data = $this->model->findData('tbl_user', 'id_register', $id_register)->row();
        echo json_encode($data);
    }

}

/* End of file  ControllerAdmin.php */
