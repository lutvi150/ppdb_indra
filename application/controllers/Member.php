<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');

    }

    public function index()
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        if ($checkStatusDaftar == null) {
            $data['content'] = 'member/home_member';
            $data['pengumuman'] = $this->model->getDataPengumuman();
            $this->load->view('member/index', $data, false);
        }
        // echo json_encode($this->session->userdata());
    }

}

/* End of file  Member.php */
