<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
        if ($this->session->userdata('role') !== 'siswa') {
            $this->session->set_flashdata('error', 'Akses tidak ada');
            redirect('controller/login');
        }

    }

    public function index()
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        if ($checkStatusDaftar->status == 'draft') {
            $data['content'] = 'member/home_member';
            $data['data_member'] = $checkStatusDaftar;
            $data['pengumuman'] = $this->model->getDataPengumuman();
            $this->load->view('member/index', $data, false);
            // }
            // echo json_encode($this->session->userdata());
            // echo json_encode($checkStatusDaftar);
        } else {
            redirect('member/halaman_home');
        }
    }

    public function halaman_home(Type $var = null)
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        $data['data_member'] = $checkStatusDaftar;
        $data['content'] = 'member/halaman_home';
        $this->load->view('member/index', $data, false);
        // echo json_encode($this->session->userdata());
    }
    public function data_pendaftaran(Type $var = null)
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        $data['content'] = 'member/home_member';
        $data['data_member'] = $checkStatusDaftar;
        $this->load->view('member/index', $data, false);
    }
    public function profil(Type $var = null)
    {
        $id_user = $this->session->userdata('id_user');
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        $data['content'] = 'member/tampil_data';
        $data['data_member'] = $checkStatusDaftar;
        $nilai = $this->dataNilai();
        foreach ($nilai as $key => $value) {
            $checkNilai = $this->model->checkNilai($id_user, $value['nilai']);
            $statusNilai = $checkNilai == null ? 0 : $checkNilai->nilai;
            $resultNilai[] = (object) [
                'id_nilai' => $value['nilai'],
                'id_user' => $id_user,
                'nilai' => $statusNilai,
                'nama_nilai' => $value['nama_nilai'],
            ];
        }
        $data['nilai'] = $resultNilai;
        $this->load->view('member/index', $data, false);
    }
    public function ubahPassword(Type $var = null)
    {
        $data['member'] = $this->model->findData('tbl_user', 'id_register', $this->session->userdata('id_user'))->row();
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        $data['data_member'] = $checkStatusDaftar;
        $data['content'] = 'member/ubah_password';
        $this->load->view('member/index', $data, false);
    }
    public function pengumuman(Type $var = null)
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $this->session->userdata('id_user'))->row();
        $data['content'] = 'member/pengumuman';
        $data['data_member'] = $checkStatusDaftar;

        $this->load->view('member/index', $data, false);
    }
    public function dataNilai(Type $var = null)
    {
        $dataNilai = (object) [
            [
                "nilai" => "bahasa_indonesia",
                "nama_nilai" => "Bahasa Indonesia",
            ], [
                "nilai" => "ipa",
                "nama_nilai" => "IPA",
            ], [
                "nilai" => "matematika",
                "nama_nilai" => "Matematika",
            ], [
                "nilai" => "bahasa_inggris",
                "nama_nilai" => "Bahasa Inggris",
            ],
        ];
        return $dataNilai;
    }

}

/* End of file  Member.php */
