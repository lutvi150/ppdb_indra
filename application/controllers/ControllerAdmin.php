<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
        $this->load->model('ModelCount', 'modelCount');
        if ($this->session->userdata('logged_in') != true) {
            $this->session->set_flashdata('error', 'Silahkan login terlebih dahulu');
            redirect('admin/index');
        }

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
    public function data_member(Type $var = null)
    {
        $data['member'] = $this->model->getDataMember();
        $data['content'] = 'admin/data_member';
        $this->load->view('admin/index', $data, false);
    }
    public function data_pendaftar(Type $var = null)
    {
        $pendaftar = $this->model->getDataPendaftar();
        $resultPendaftar = [];
        if ($pendaftar) {
            foreach ($pendaftar as $key => $value) {
                $resultPendaftar[] = (object) [
                    'id_register' => $value->id_register,
                    'nama' => $value->nama,
                    'nisn' => $value->nisn,
                    'tgl_lahir' => $value->tgl_lahir,
                    'asal_sekolah' => $value->asal_sekolah,
                    'id_pendaftaran' => $value->id_pendaftaran,
                    'dokumen' => $this->model->findData('tbl_lampiran', 'id_user', $value->id_user)->result(),
                    'id_user' => $value->id_user,
                    'kelulusan' => $value->kelulusan,
                ];
            }
        }
        $data['content'] = 'admin/data_pendaftar';
        $data['pendaftar'] = $resultPendaftar;
        $this->load->view('admin/index', $data, false);
        // echo json_encode($data);
    }
    public function hapus_data_pendaftar($id)
    {
        $this->model->deleteData('tbl_pendaftar', 'id_user', $id);
        $this->model->deleteData('tbl_lampiran', 'id_user', $id);
        $this->model->deleteData('tbl_user', 'id_register', $id);
        $this->session->set_flashdata('success', 'Data berhasil di hapus');
        redirect('controllerAdmin/data_pendaftar');
    }
    public function edit_data_pendaftar($id)
    {
        $checkStatusDaftar = $this->model->findData('tbl_pendaftar', 'id_user', $id)->row();
        $data['data_member'] = $checkStatusDaftar;
        $data['content'] = 'admin/edit_data_pendaftar';
        $this->load->view('admin/index', $data, false);
    }
    public function data_lengkap_pendaftar($id_user)
    {
        $data['data'] = $this->model->getDataMemberSpesifik($id_user);
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
        $data['foto'] = $this->model->findAttachment($id_user, 1);
        $data['skhu'] = $this->model->findAttachment($id_user, 3);
        $data['content'] = 'admin/data_lengkap_pendaftar';
        $this->load->view('admin/index', $data, false);
    }
    public function setting(Type $var = null)
    {
        $getSetting = $this->model->getSetting('pengumuman');
        if ($getSetting == null) {
            $insertSetting = [
                'jenis_setting' => 'pengumuman',
                'setting' => date('Y-m-d H:i:s'),
            ];
            $this->model->insertData('tbl_setting', $insertSetting);
            redirect('controllerAdmin/setting');
        }
        $getKuata = $this->model->getSetting('kuata');
        if ($getKuata == null) {
            $insertSetting = [
                'jenis_setting' => 'kuata',
                'setting' => 100,
            ];
            $this->model->insertData('tbl_setting', $insertSetting);
            redirect('controllerAdmin/setting');
        }
        $getTotalLulus = $this->model->getSetting('total_lulus');
        if ($getTotalLulus == null) {
            $insertSetting = [
                'jenis_setting' => 'total_lulus',
                'setting' => 0,
            ];
            $this->model->insertData('tbl_setting', $insertSetting);
            redirect('controllerAdmin/setting');
        }
        $data['settingPengumuman'] = $getSetting;
        $data['settingKuata'] = $getKuata;
        $data['settingTotalLulus'] = $getTotalLulus;
        $data['content'] = 'admin/setting_';
        $this->load->view('admin/index', $data, false);
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
    public function data_galeri(Type $var = null)
    {
        $data['galeri'] = $this->model->getData('tbl_galeri', 'id_foto', 'DESC');
        $data['content'] = 'admin/data_galeri';
        $this->load->view('admin/index', $data, false);
    }
    public function simpanGaleri(Type $var = null)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_galeri')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', 'Upload Gagal');
            redirect('controllerAdmin/data_galeri');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $insert = [
                'nama_foto' => $this->input->post('nama_foto'),
                'foto_galeri' => $data['upload_data']['file_name'],
            ];
            $this->model->insertData('tbl_galeri', $insert);
            $this->session->set_flashdata('success', 'Upload Berhasil');
            redirect('controllerAdmin/data_galeri');
        }

    }
    public function update_galeri(Type $var = null)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_g')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', 'Upload Gagal');
            redirect('controllerAdmin/data_galeri');
        } else {
            $id_foto = $this->input->post('idg');
            $checkFoto = $this->model->findData('tbl_galeri', 'id_foto', $id_foto)->row();
            if (file_exists('./uploads/' . $checkFoto->foto_galeri)) {
                unlink('./uploads/' . $checkFoto->foto_galeri);
            }
            $data = array('upload_data' => $this->upload->data());
            $insert = [
                'nama_foto' => $this->input->post('nama_f'),
                'foto_galeri' => $data['upload_data']['file_name'],
            ];
            $this->model->updateData('tbl_galeri', 'id_foto', $id_foto, $insert);
            $this->session->set_flashdata('success', 'Update Data berhasil');
            redirect('controllerAdmin/data_galeri');
            echo json_encode($checkFoto);
        }

    }
    public function hapus_galeri($id)
    {
        $checkFoto = $this->model->findData('tbl_galeri', 'id_foto', $id)->row();
        if (file_exists('./uploads/' . $checkFoto->foto_galeri)) {
            unlink('./uploads/' . $checkFoto->foto_galeri);
        }
        $this->model->deleteData('tbl_galeri', 'id_foto', $id);
        $this->session->set_flashdata('success', 'Data berhasil di hapus');
        redirect('controllerAdmin/data_galeri');
    }
    public function edit_galeri($id)
    {
        $checkFoto = $this->model->findData('tbl_galeri', 'id_foto', $id)->row();
        $data['foto'] = $checkFoto;
        $data['content'] = 'admin/edit_galeri';
        $this->load->view('admin/index', $data, false);
    }
    public function data_pengumuman(Type $var = null)
    {
        $data['pengumuman'] = $this->model->getData('tbl_pengumuman', 'id_pengumuman', 'DESC');
        $data['content'] = 'admin/data_pengumuman';
        $this->load->view('admin/index', $data, false);
    }
    public function hapus_pengumuman($id_pengumuman)
    {
        $checkPengumuman = $this->model->findData('tbl_pengumuman', 'id_pengumuman', $id_pengumuman)->row();
        if (file_exists('./uploads/' . $checkPengumuman->foto_pengumuman)) {
            unlink('./uploads/' . $checkPengumuman->foto_pengumuman);
        }
        $this->model->deleteData('tbl_pengumuman', 'id_pengumuman', $id_pengumuman);
        $this->session->set_flashdata('success', 'Data berhasil di hapus');
        redirect('controllerAdmin/data_pengumuman');
    }
    public function edit_pengumuman($id_pengumuman)
    {
        $data['pengumuman'] = $this->model->findData('tbl_pengumuman', 'id_pengumuman', $id_pengumuman)->row();
        $data['content'] = 'admin/edit_pengumuman';
        $this->load->view('admin/index', $data, false);
    }
    public function update_pengumuman()
    {
        $id_pengumuman = $this->input->post('idp');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $checkFoto = $this->model->findData('tbl_pengumuman', 'id_pengumuman', $id_pengumuman)->row();
        if (!$this->upload->do_upload('foto')) {
            $foto = $checkFoto->foto_pengumuman;
        } else {
            $data = array('upload_data' => $this->upload->data());
            if (file_exists('./uploads/' . $checkFoto->foto_pengumuman)) {
                unlink('./uploads/' . $checkFoto->foto_pengumuman);
            }
            $foto = $data['upload_data']['file_name'];
        }

        $insert = [
            'judul_pengumuman' => $this->input->post('judul'),
            'isi_pengumuman' => $this->input->post('isi'),
            'foto_pengumuman' => $foto,
            'tgl_pengumuman' => $this->input->post('tgl'),
        ];
        $this->model->updateData('tbl_pengumuman', 'id_pengumuman', $id_pengumuman, $insert);
        $this->session->set_flashdata('success', 'Update Data berhasil');
        redirect('controllerAdmin/data_pengumuman');
    }
    public function simpan_pengumuman()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('error', 'Upload Gagal');
            redirect('controllerAdmin/data_pengumuman');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $foto = $data['upload_data']['file_name'];

            $insert = [
                'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                'isi_pengumuman' => $this->input->post('isi'),
                'foto_pengumuman' => $foto,
                'tgl_pengumuman' => $this->input->post('tanggal'),
            ];
            $this->model->insertData('tbl_pengumuman', $insert);
            $this->session->set_flashdata('success', 'Update Data berhasil');
            redirect('controllerAdmin/data_pengumuman');
        }
    }
    public function data_kelulusan($status)
    {
        $status == 'lulus' ? $status = 'lulus' : $status = 'tidak lulus';
        $kelulusan = $this->model->getDataSiswaKelulusan($status);
        $title = $status == 'lulus' ? 'Data Siswa Yang Lulus' : 'Data Siswa Yang Tidak Lulus';
        $resultKelulusan = [];
        if ($kelulusan != null) {
            foreach ($kelulusan as $key => $value) {
                $pas_foto = $this->model->findAttachment($value->id_user, 1);
                $pas_foto == null ? $pas_foto = 'default.png' : $pas_foto = $pas_foto->lampiran;
                $resultKelulusan[] = (object) [
                    'nisn' => $value->nisn,
                    'nama' => $value->nama,
                    'tgl_lahir' => $value->tgl_lahir,
                    'asal_sekolah' => $value->asal_sekolah,
                    'nm_ayah' => $value->nm_ayah,
                    'pas_foto' => $pas_foto,
                ];
            }
        }
        $data['title'] = $title;
        $data['kelulusan'] = $resultKelulusan;
        $data['content'] = 'admin/data_lulus';
        $this->load->view('admin/index', $data, false);
        // echo json_encode($data);
    }
    // laporan periode
    public function laporan_periode(Type $var = null)
    {
        $data['content'] = 'admin/laporan_perpriode';
        $this->load->view('admin/index', $data, false);
    }
    public function cetak_tahunan(Type $var = null)
    {
        $tahun = $this->input->post('year');
        $data['tahun'] = $tahun;
        $laporan = $this->model->getDataByYear($tahun, 'lulus');
        $resultLaporan = [];
        if ($laporan != null) {
            foreach ($laporan as $key => $value) {
                $lampiran = $this->model->findAttachment($value->id_user, 1);
                $lam = $lampiran == null ? '-' : $lampiran->lampiran;
                $resultLaporan[] = (object) [
                    'nisn' => $value->nisn,
                    'nama' => $value->nama,
                    'tgl_lahir' => $value->tgl_lahir,
                    'asal_sekolah' => $value->asal_sekolah,
                    'nm_ayah' => $value->nm_ayah,
                    'tgl_daftar' => $value->tgl_daftar,
                    'pas_foto' => $lam,
                ];
            }
        }
        $data['laporan'] = $resultLaporan;
        $data['content'] = 'admin/cetaak_tahunan';
        $this->load->view('admin/index', $data, false);
        // echo json_encode($data);
    }
    public function laporan_tidak_lulus(Type $var = null)
    {
        $data['content'] = 'admin/laporan_tidak_lulus';
        $this->load->view('admin/index', $data, false);
    }
    public function cetak_tidak_lulus(Type $var = null)
    {
        $tahun = $this->input->post('year');
        $data['tahun'] = $tahun;
        $laporan = $this->model->getDataByYear($tahun, 'tidak lulus');
        $resultLaporan = [];
        if ($laporan != null) {
            foreach ($laporan as $key => $value) {
                $lampiran = $this->model->findAttachment($value->id_user, 1);
                $lam = $lampiran == null ? '-' : $lampiran->lampiran;
                $resultLaporan[] = (object) [
                    'nisn' => $value->nisn,
                    'nama' => $value->nama,
                    'tgl_lahir' => $value->tgl_lahir,
                    'asal_sekolah' => $value->asal_sekolah,
                    'nm_ayah' => $value->nm_ayah,
                    'tgl_daftar' => $value->tgl_daftar,
                    'pas_foto' => $lam,
                ];
            }
        }
        $data['laporan'] = $resultLaporan;
        $data['content'] = 'admin/cetak_tidaklulus';
        $this->load->view('admin/index', $data, false);
    }

}

/* End of file  ControllerAdmin.php */
