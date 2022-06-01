<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ApiMember extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
    }

    public function index()
    {

    }
    public function storeDataMember(Type $var = null)
    {
        $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'trim|required', [
            'required' => 'Nama Lengkap harus diisi',
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis Kelamin', 'trim|required', [
            'required' => 'Jenis Kelamin harus diisi',
        ]);
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'trim|required', [
            'required' => 'Tempat Lahir harus diisi',
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required', [
            'required' => 'Tanggal Lahir harus diisi',
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required', [
            'required' => 'Agama harus diisi',
        ]);
        $this->form_validation->set_rules('asl_sk', 'Asal Sekolah', 'trim|required', [
            'required' => 'Asal Sekolah harus diisi',
        ]);
        $this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'trim|required', [
            'required' => 'Nama Ayah Harus di isi',
        ]);
        $this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'trim|required', [
            'required' => 'Nama Ibu Harus di isi',
        ]);
        $this->form_validation->set_rules('kerja_ayah', 'Pekerjaan Ayah', 'trim|required', [
            'required' => 'Pekerjaan Ayah Harus di isi',
        ]);
        $this->form_validation->set_rules('kerja_ibu', 'Pekerjaan Ibu', 'trim|required', [
            'required' => 'Pekerjaan Ibu Harus di isi',
        ]);
        $this->form_validation->set_rules('hasil_ayah', 'Penghasilan Ayah', 'trim|required|numeric', [
            'required' => 'Alamat Harus di isi',
            'numeric' => 'Penghasilan Ayah harus diisi dengan angka',
        ]);
        $this->form_validation->set_rules('hasil_ibu', 'Penghasilan Ibu', 'trim|required|numeric', [
            'required' => 'Alamat Harus di isi',
            'numeric' => 'Penghasilan Ibu harus diisi dengan angka',
        ]);
        $this->form_validation->set_rules('almt_lkp', 'Alamat', 'trim|required', [
            'required' => 'Alamat harus diisi',
        ]);
        $this->form_validation->set_rules('no_tlp', 'Nomor Kontak', 'trim|required', [
            'required' => 'Nomor Kontak harus diisi',
        ]);
        $this->form_validation->set_rules('anakke', 'Anak Ke', 'trim|required', [
            'required' => 'Anak Ke harus diisi',
        ]);
        $this->form_validation->set_rules('jmlsaudara', 'Jumlah Saudara', 'trim|required', [
            'required' => 'Jumlah Saudara harus diisi',
        ]);
        // use for check kuata
        $checkKuata = $this->model->getSetting('kuata');
        $countRegister = $this->model->findData('tbl_pendaftar', 'status', 'process')->num_rows();
        if ($countRegister >= $checkKuata->setting) {
            $respon = [
                'status' => 'kuata_full',
                'message' => 'Kuata sudah penuh',
            ];
        } else {
            if ($this->form_validation->run() == false) {
                $respon = [
                    'status' => 'validation_error',
                    'message' => $this->form_validation->error_array(),
                ];
            } else {
                $id_user = $this->input->post('id_user');
                $checkDokument = $this->model->findData('tbl_lampiran', 'id_user', $id_user)->result();
                if ($checkDokument >= 3) {
                    $checkNilai = $this->model->findData('tbl_nilai', 'id_user', $id_user)->result();
                    if ($checkNilai > 1) {
                        $register = [
                            'no_pendaftaran' => 'REG-' . date('Ymd') . '-' . $id_user,
                            'tgl_daftar' => date('Y-m-d'),
                            'nisn' => $this->input->post('nisn'),
                            'nama' => $this->input->post('nm_lengkap'),
                            'tempat_lahir' => $this->input->post('tmpt_lahir'),
                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                            'jenis_kelamin' => $this->input->post('jenis'),
                            'agama' => $this->input->post('agama'),
                            'asal_sekolah' => $this->input->post('asl_sk'),
                            'nm_ayah' => $this->input->post('nm_ayah'),
                            'penghasilan_ayah' => $this->input->post('hasil_ayah'),
                            'pekerjaan_ayah' => $this->input->post('kerja_ayah'),
                            'nm_ibu' => $this->input->post('nm_ibu'),
                            'pekerjaan_ibu' => $this->input->post('kerja_ibu'),
                            'penghasilan_ibu' => $this->input->post('hasil_ibu'),
                            'alamat' => $this->input->post('almt_lkp'),
                            'no_tlp' => $this->input->post('no_tlp'),
                            'konfirmasi' => 0,
                            'kelulusan' => null,
                            'id_user' => $id_user,
                            'status' => 'process',
                            'anak_ke' => $this->input->post('anakke'),
                            'jumlah_saudara' => $this->input->post('jmlsaudara'),
                        ];
                        $this->model->updateData('tbl_pendaftar', 'id_user', $id_user, $register);
                        $this->prosesUserLulus();
                        $respon = [
                            'status' => 'success',
                            'message' => 'Pendaftaran berhasil, silahkan tunggu konfirmasi dari admin'];

                    } else {
                        $respon = [
                            'status' => 'score_not_enough',
                            'message' => 'Anda harus mengisi nilai terlebih dahulu',
                        ];
                    }
                } else {
                    $respon = [
                        'status' => 'document_error',
                        'message' => 'Lampiran dokumen belumlengkap',
                    ];
                }
            }
        }
        echo json_encode($respon);
    }
    public function showDataNilai(Type $var = null)
    {
        $id_user = $this->input->post('id_user');
        $nilai = $this->dataNilai();
        foreach ($nilai as $key => $value) {
            $checkNilai = $this->model->checkNilai($id_user, $value['nilai']);
            $statusNilai = $checkNilai == null ? 0 : $checkNilai->nilai;
            $resultNilai[] = [
                'id_nilai' => $value['nilai'],
                'id_user' => $id_user,
                'nilai' => $statusNilai,
                'nama_nilai' => $value['nama_nilai'],
            ];
        }
        $respon = [
            'status' => 'success',
            'data' => $resultNilai,
        ];
        echo json_encode($respon);
    }
    public function showAttachment(Type $var = null)
    {
        $id_user = $this->input->post('id_user');
        $attachment = [
            [
                'id_attachment' => 1,
                'name' => 'Pas Photo',
            ], [
                'id_attachment' => 2,
                'name' => 'Bukti Transfer',
            ], [
                'id_attachment' => 3,
                'name' => 'Scan SKHU',
            ],
        ];
        foreach ($attachment as $key => $value) {
            $checkLampiran = $this->model->findAttachment($id_user, $value['id_attachment']);
            $lampiran = $checkLampiran == null ? 0 : $checkLampiran->lampiran;
            $type = $checkLampiran == null ? 0 : $checkLampiran->type;
            $resultAttachment[] = [
                'id_attachment' => $value['id_attachment'],
                'name' => $value['name'],
                'file' => $lampiran,
                'type' => $type,
            ];
        }
        $respon = [
            'status' => 'success',
            'data' => $resultAttachment,
        ];
        echo json_encode($respon);
    }
    public function uploadLampiran(Type $var = null)
    {

        $id_user = $this->input->post('id_user');
        $id_attachment = $this->input->post('id_attachment');
        $lampiran = $this->input->post('lampiran');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lampiran')) {
            $respon = [
                'status' => 'error',
                'message' => $this->upload->display_errors(),
            ];
        } else {
            $upload_data = $this->upload->data();
            $insert = [
                'id_user' => $id_user,
                'id_attachment' => $id_attachment,
                'lampiran' => $upload_data['file_name'],
                'type' => $upload_data['file_ext'],
            ];
            $checkLampiran = $this->model->findAttachment($id_user, $id_attachment);
            if ($checkLampiran) {
                if (file_exists('./uploads/' . $checkLampiran->lampiran)) {
                    unlink('./uploads/' . $checkLampiran->lampiran);
                }
                $this->model->updateAttachment($id_user, $id_attachment, $insert);
            } else {
                $this->model->insertData('tbl_lampiran', $insert);
            }
        }
        $respon = [
            'status' => 'success',
            'message' => $upload_data,
        ];
        echo json_encode($respon);
    }
    public function updateNilai(Type $var = null)
    {
        $start = microtime(true);
        $id_user = $this->input->post('id_user');
        $nilai_rata_rata = $this->input->post('total');

        $this->model->deleteData('tbl_nilai', 'id_user', $id_user);
        $nilai = ['ipa', 'matematika', 'bahasa_inggris', 'bahasa_indonesia'];
        $this->model->updateData('tbl_pendaftar', 'id_user', $id_user, ['nilai_rata_rata' => $nilai_rata_rata]);
        foreach ($nilai as $key => $value) {
            $nilai = $this->input->post($value);
            $insert[] = [
                'id_user' => $id_user,
                'jenis_nilai' => $value,
                'nilai' => $nilai,
            ];
        }
        $this->model->insertBacth('tbl_nilai', $insert);
        $respon = [
            'status' => 'success',
            'message' => 'Nilai berhasil diupdate',
            'elapsed_time' => microtime(true) - $start,
        ];
        echo json_encode($respon);

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
    public function checkDate(Type $var = null)
    {
        $date = $this->model->findData('tbl_setting', 'jenis_setting', 'pengumuman')->row()->setting;
        $respon = [
            'status' => 'success',
            'data' => $date,
        ];
        echo json_encode($respon);
    }
    public function checkKelulusan(Type $var = null)
    {
        $id_user = $this->input->post('id_user');
        $checkKelulusan = $this->model->findData('tbl_pendaftar', 'id_user', $id_user)->row()->kelulusan;
        $distance = $this->input->post('distance');
        if ($distance < 0) {

            $respon = [
                'status' => 'success',
                'data' => $checkKelulusan,
            ];
        } else {
            $respon = [
                'status' => 'error',
                'message' => 'Anda tidak dapat mengubah data',
            ];
        }
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
    public function cetakKelulusan($id_user = null)
    {
        $data['user'] = $this->model->findData('tbl_pendaftar', 'id_user', $id_user)->row();
        $lampiran = $this->model->findAttachment($id_user, 1);
        $data['pas_photo'] = $lampiran == null ? null : base_url('uploads/' . $lampiran->lampiran);
        $this->load->view('member/cetak_bukti', $data);
    }
}

/* End of file  ApiMember.php */
