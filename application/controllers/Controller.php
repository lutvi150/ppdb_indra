<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');

    }
    public function index()
    {
        $data['content'] = 'home_page';
        $data['pengumuman'] = $this->model->getDataPengumuman();
        $this->load->view('home', $data, false);
    }
    public function detail_pengumuman($id = null)
    {
        if ($id == null) {
            redirect('controller/index');
        } else {
            $data['pengumuman'] = $this->model->findData('tbl_pengumuman', 'id_pengumuman', $id)->row();
            $data['date'] = $this->costumeDate($data['pengumuman']->tgl_pengumuman);
            $data['content'] = 'detail_pengumuman';
            $this->load->view('home', $data, false);
        }
    }
    public function routePage($url = null)
    {
        if ($url == null) {
            redirect('controller/index');
        } else {
            $data['content'] = $url;
            $this->load->view('home', $data, false);
        }
    }
    public function galeri(Type $var = null)
    {
        $data['galeri'] = $this->model->getData('tbl_galeri', 'id_foto', 'desc');
        $data['content'] = 'galeri';
        $this->load->view('home', $data, false);
    }
    public function costumeDate($date)
    {
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl = substr($date, 8, 2);

        $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
        return $result;
    }
    public function register(Type $var = null)
    {
        $username = $this->input->post('user');
        $checkUsername = $this->model->findData('tbl_user', 'username', $username)->num_rows();
        if ($checkUsername > 0) {
            $this->session->set_flashdata('error', 'Username sudah terdaftar');
            redirect('controller/routePage/register');
        } else {
            $insert = [
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama_lengkap'),
                'username' => $this->input->post('user'),
                'password' => hash('sha512', $this->input->post('pass')),
                'role' => 'siswa',
            ];
            $this->model->insertData('tbl_user', $insert);
            $this->session->set_flashdata('success', 'Pendaftaran berhasil, silahkan login');
            redirect('controller/routePage/login');
        }
    }
    public function login(Type $var = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $checkAccount = $this->model->checkAccount($username, $password, 'siswa');
        if ($checkAccount == null) {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('controller/routePage/login');
        } else {
            $ses = [
                'id_user' => $checkAccount->id_register,
                'username' => $checkAccount->username,
                'role' => $checkAccount->role,
                'nama' => $checkAccount->nama,
                'nisn' => $checkAccount->nisn,
            ];

            $this->session->set_userdata($ses);
            redirect('member');
        }
        // echo json_encode($checkAccount);
    }
    public function logout(Type $var = null)
    {
        $this->session->sess_destroy();
        redirect('controller/index');
    }
}

/* End of file  Controller.php */
