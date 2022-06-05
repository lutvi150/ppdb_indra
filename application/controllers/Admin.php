<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');

    }

    public function index()
    {
        $data = null;
        $this->load->view('admin/login', $data, false);

    }
    public function verifikasiAdmin(Type $var = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $checkAccount = $this->model->checkAccount($username, $password, 'admin');
        if ($checkAccount == null) {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('admin/index');
        } else {
            $ses = [
			'id_user' => $checkAccount->id_register,
                'username' => $checkAccount->username,
                'role' => $checkAccount->role,
                'nama' => $checkAccount->nama,
                'logged_in' => true,
            ];

            $this->session->set_userdata($ses);
            redirect('ControllerAdmin/index');
        }
    }
    public function makeAdmin(Type $var = null)
    {
        $akun = hash('sha512', 'admin');
        echo json_encode($akun);
    }

}

/* End of file  Admin.php */
