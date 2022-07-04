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
    // update password admin
    public function updatePassword(Type $var = null)
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric', [
            'required' => 'Username tidak boleh kosong',
            'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka',
        ]);
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required|min_length[5]', [
            'required' => 'Password Lama tidak boleh kosong',
            'min_length' => 'Password Lama minimal 5 karakter',
        ]);
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required|min_length[5]', [
            'required' => 'Password Baru tidak boleh kosong',
            'min_length' => 'Password Baru minimal 5 karakter',
        ]);
        $this->form_validation->set_rules('ulangi_password', 'Konfirmasi Password', 'trim|required|min_length[5]|matches[password_baru]', [
            'required' => 'Konfirmasi Password tidak boleh kosong',
            'min_length' => 'Konfirmasi Password minimal 5 karakter',
        ]);
        if ($this->form_validation->run() == false) {
            $respon = [
                'status' => 'validation_failed',
                'message' => $this->form_validation->error_array(),
            ];
        } else {
            $username = $this->input->post('username');
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru');
            $id_user = $this->input->post('id_user');
            $checkAccount = $this->model->checkAccount($username, $password_lama, 'admin');
            if ($checkAccount == null) {
                $respon = [
                    'status' => 'error',
                    'message' => 'Username atau password salah',
                ];
            } else {
                $update = [
                    'password' => hash('sha512', $password_baru),
                    'username' => $username,
                ];
                $this->model->updateData('tbl_user', 'id_register', $id_user, $update);
                $respon = [
                    'status' => 'success',
                    'message' => 'Password berhasil diupdate',
                ];
            }
        }
        echo json_encode($respon);
    }
    public function makeChart(Type $var = null)
    {

        $jenis_laporan = $this->input->post('jenis_laporan');
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        if ($jenis_laporan == 'bulan') {
            $hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
            $data_siswa = $this->getDataSiswa($jenis_laporan, $tahun . '-' . $bulan);
            for ($i = 1; $i <= $hari; $i++) {
                $checklabel = strlen($i) > 1 ? $i : "0" . $i;
                $tanggal = $tahun . "-" . $bulan . "-" . $checklabel;
                $label[] = $checklabel;
                $lulus[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'lulus');
                $tidak_lulus[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'tidak lulus');
                $peserta[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'all');
            }
            $data = [
                'label' => $label,
                'lulus' => $lulus,
                'tidak_lulus' => $tidak_lulus,
                'peserta' => $peserta,
                'data_siswa' => $data_siswa,
            ];
        } elseif ($jenis_laporan == 'tahun') {
            $data_bulan = $this->bulan();
            $data_siswa = $this->getDataSiswa($jenis_laporan, $tahun);
            foreach ($data_bulan as $key => $value) {
                $tanggal = $tahun . '-' . $value['kode_bulan'];
                $label[] = $value['nama_bulan'];
                $lulus[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'lulus');
                $tidak_lulus[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'tidak lulus');
                $peserta[] = $this->model->getDataChart($jenis_laporan, $tanggal, 'all');

            }
            $data = [
                'label' => $label,
                'lulus' => $lulus,
                'tidak_lulus' => $tidak_lulus,
                'peserta' => $peserta,
                'data_siswa' => $data_siswa,
            ];
        } elseif ($jenis_laporan == 'mingguan') {
            $data_siswa = $this->getDataSiswa($jenis_laporan, ['mulai' => $tanggal_mulai, 'selesai' => $tanggal_selesai]);
            $date = new DatePeriod(
                new DateTime($tanggal_mulai),
                new DateInterval('P1D'),
                new DateTime($tanggal_selesai)
            );
            foreach ($date as $key => $value) {
                $label[] = $value->format('Y-m-d');
                $lulus[] = $this->model->getDataChart($jenis_laporan, $value->format('Y-m-d'), 'lulus');
                $tidak_lulus[] = $this->model->getDataChart($jenis_laporan, $value->format('Y-m-d'), 'tidak lulus');
                $peserta[] = $this->model->getDataChart($jenis_laporan, $value->format('Y-m-d'), 'all');
            }
            $data = [
                'label' => $label,
                'lulus' => $lulus,
                'tidak_lulus' => $tidak_lulus,
                'peserta' => $peserta,
                'data_siswa' => $data_siswa,
            ];
        }
        $respon = [
            'status' => 'success',
            'data' => $data,
            'jenis_laporan' => $jenis_laporan,
        ];
        echo json_encode($respon);
    }
    public function getDataSiswa($jenis, $tanggal)
    {
        $data_siswa = $this->model->getDataSiswaLaporan($jenis, $tanggal);
        return $data_siswa;
    }
    public function bulan(Type $var = null)
    {
        $bulan = [[
            'kode_bulan' => '01',
            'nama_bulan' => 'Januari',
        ], [
            'kode_bulan' => '02',
            'nama_bulan' => 'Februari',
        ], [
            'kode_bulan' => '03',
            'nama_bulan' => 'Maret',
        ], [
            'kode_bulan' => '04',
            'nama_bulan' => 'April',
        ], [
            'kode_bulan' => '05',
            'nama_bulan' => 'Mei',
        ], [
            'kode_bulan' => '06',
            'nama_bulan' => 'Juni',
        ], [
            'kode_bulan' => '07',
            'nama_bulan' => 'Juli',
        ], [
            'kode_bulan' => '08',
            'nama_bulan' => 'Agustus',
        ], [
            'kode_bulan' => '09',
            'nama_bulan' => 'September',
        ], [
            'kode_bulan' => '10',
            'nama_bulan' => 'Oktober',
        ], [
            'kode_bulan' => '11',
            'nama_bulan' => 'November',
        ], [
            'kode_bulan' => '12',
            'nama_bulan' => 'Desember',
        ]];
        return $bulan;
    }
    public function storeDataInformasi(Type $var = null)
    {
        $id_informasi = $this->input->post('id_informasi');
        $this->model->updateData('tbl_informasi', 'id_informasi', $id_informasi, ['isi' => $this->input->post('isi')]);
        $respon = [
            'status' => 'success',
            'message' => 'Data berhasil diupdate',
        ];
        echo json_encode($respon);
    }
    public function verifikasiAccount(Type $var = null)
    {
        $status_verifikasi = $this->input->post('status');
        $id_user = $this->input->post('id_user');
        $this->model->updateData('tbl_user', 'id_register', $id_user, ['verifikasi_email' => $status_verifikasi]);
        $message = $status_verifikasi == 1 ? "Verifikasi account berhasil" : "Verifikasi berhasil di batalkan";
        $respon = [
            'status' => 'success',
            'msg' => $message,
            'id_user' => $id_user,
            'status_verifikasi' => $status_verifikasi,
            'data' => $this->model->findData('tbl_user', 'id_register', $id_user)->row(),
        ];
        echo json_encode($respon);
    }
    public function uploadAssets(Type $var = null)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encryption'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('assets')) {
            $respon = [
                'status' => 'failed',
                'error' => $this->upload->display_errors(),
            ];
        } else {
            $data = array('upload_data' => $this->upload->data());
            $insert = [
                'assets' => $this->upload->upload(),
            ];
            $respon = [
                'status' => 'success',
                'data' => $insert,
            ];

        }
        echo json_encode($respon);

    }
}

/* End of file  ApiAdmin.php */
