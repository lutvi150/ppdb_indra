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
    public function sendMail($email, $nama, $pesan)
    {
        require_once __DIR__ . '/../../vendor/autoload.php';
        $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

        $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
            new GuzzleHttp\Client(),
            $config
        );

        $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
        // $sendSmtpEmail['to'] = array(array('email' => 'fentijuandaputri@gmail.com', 'name' => 'John Doe'));
        // $sendSmtpEmail['templateId'] = 59;
        // $sendSmtpEmail['params'] = array('name' => 'John', 'surname' => 'Doe');
        // $sendSmtpEmail['headers'] = array('X-Mailin-custom' => 'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
        $sendSmtpEmail['subject'] = 'My {{params.subject}}';
        $sendSmtpEmail['htmlContent'] = '<html><body><h1>' . $pesan . '</h1></body></html>';
        $sendSmtpEmail['sender'] = array('name' => 'SMP PNIEL MEDAN', 'email' => 'pnielmedan@cloverteam.com');
        $sendSmtpEmail['to'] = array(
            array('email' => $email, 'name' => $nama),
        );
        $sendSmtpEmail['cc'] = array(
            array('email' => $email, 'name' => $nama),
        );
        $sendSmtpEmail['bcc'] = array(
            array('email' => $email, 'name' => $nama),
        );
        $sendSmtpEmail['replyTo'] = array('email' => 'rpnielmedan@cloverteam.com', 'name' => 'Peniel Medan');
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        $sendSmtpEmail['params'] = array('parameter' => 'Verifikasi Account', 'subject' => 'Verifikasi Account');
        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            $response = [
                'status' => 'success',
                'message' => 'send email success',
                'result' => $result,
            ];
        } catch (Exception $e) {
            // $res= 'Exception when calling ContactsApi->importContacts: ', $e->getMessage(), PHP_EOL;
            $response = [
                'status' => 'error',
                'message' => 'send email failed',
                'result' => $e->getMessage(),
            ];
        }
        return $response;
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
        $this->form_validation->set_rules('nisn', 'nisn', 'trim|required|numeric|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('user', 'Username', 'trim|required|alpha_numeric|min_length[5]|max_length[20]|is_unique[tbl_user.username]');

        if ($checkUsername > 0) {
            $this->session->set_flashdata('error', 'Username sudah terdaftar');
            redirect('controller/routePage/register');
        } else {
            $nisn = $this->input->post('nisn');
            $nama = $this->input->post('nama_lengkap');

            $insert = [
                'nisn' => $nisn,
                'nama' => $nama,
                'username' => $this->input->post('user'),
                'password' => hash('sha512', $this->input->post('pass')),
                'role' => 'siswa',
                'verifikasi_email' => false,
            ];
            $user_id = $this->model->insertData('tbl_user', $insert);
            $register = [
                'id_register' => 0,
                'no_pendaftaran' => 0,
                'tgl_daftar' => date('Y-m-d'),
                'nisn' => $nisn,
                'nama' => $nama,
                'tempat_lahir' => 0,
                'tgl_lahir' => date('Y-m-d'),
                'jenis_kelamin' => '-',
                'agama' => '-',
                'asal_sekolah' => '-',
                'nm_ayah' => '-',
                'penghasilan_ayah' => 0,
                'pekerjaan_ayah' => 0,
                'nm_ibu' => '-',
                'pekerjaan_ibu' => 0,
                'penghasilan_ibu' => 0,
                'alamat' => '-',
                'no_tlp' => '-',
                'konfirmasi' => '-',
                'id_user' => $user_id,
                'status' => 'draft',
                'anak_ke' => 0,
                'jumlah_saudara' => 0,
            ];
            $this->model->insertData('tbl_pendaftar', $register);
            $this->session->set_flashdata('success', 'Pendaftaran berhasil, silahkan login');
            redirect('controller/routePage/login');
        }
    }
    public function register_v2(Type $var = null)
    {

        $username = $this->input->post('user');
        $this->form_validation->set_rules('nisn', 'nisn', 'trim|required|numeric|min_length[8]|max_length[8]', [
            'required' => 'NISN tidak boleh kosong',
            'numeric' => 'NISN harus berupa angka',
            'min_length' => 'NISN harus 8 digit',
            'max_length' => 'NISN harus 8 digit',
        ]);
        $this->form_validation->set_rules('user', 'Username', 'trim|required|min_length[5]|max_length[20]|is_unique[tbl_user.username]|valid_email', [
            'required' => 'Username tidak boleh kosong',
            'min_length' => 'Username minimal 5 karakter',
            'max_length' => 'Username maksimal 20 karakter',
            'is_unique' => 'Username sudah terdaftar',
            'valid_email' => 'Username harus berupa email',
        ]);
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[5]', [
            'required' => 'Password tidak boleh kosong',
            'min_length' => 'Password minimal 5 karakter',
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|alpha_numeric_spaces', [
            'required' => 'Nama Lengkap tidak boleh kosong',
            'alpha_numeric_spaces' => 'Nama Lengkap harus berupa huruf dan angka',
        ]);
        if ($this->form_validation->run() == false) {
            $response = [
                'status' => 'validation_failed',
                'errors' => $this->form_validation->error_array(),
                'post' => $this->input->post(),
            ];
        } else {
            $checkUsername = $this->model->findData('tbl_user', 'username', $username)->num_rows();
            if ($checkUsername > 0) {
                $response = [
                    'status' => 'validation_failed',
                    'errors' => [
                        'username' => 'Username sudah terdaftar',
                    ],
                ];
            } else {
                $nisn = $this->input->post('nisn');
                $nama = $this->input->post('nama_lengkap');
                $user = $this->input->post('user');
                $pass = hash('sha512', $this->input->post('pass'));
                $insert = [
                    'nisn' => $nisn,
                    'nama' => $nama,
                    'username' => $user,
                    'password' => hash('sha512', $this->input->post('pass')),
                    'role' => 'siswa',
                    'verifikasi_email' => false,
                ];
                $user_id = $this->model->insertData('tbl_user', $insert);
                $register = [
                    'id_register' => 0,
                    'no_pendaftaran' => 0,
                    'tgl_daftar' => date('Y-m-d'),
                    'nisn' => $nisn,
                    'nama' => $nama,
                    'tempat_lahir' => 0,
                    'tgl_lahir' => date('Y-m-d'),
                    'jenis_kelamin' => '-',
                    'agama' => '-',
                    'asal_sekolah' => '-',
                    'nm_ayah' => '-',
                    'penghasilan_ayah' => 0,
                    'pekerjaan_ayah' => 0,
                    'nm_ibu' => '-',
                    'pekerjaan_ibu' => 0,
                    'penghasilan_ibu' => 0,
                    'alamat' => '-',
                    'no_tlp' => '-',
                    'konfirmasi' => '-',
                    'id_user' => $user_id,
                    'status' => 'draft',
                    'anak_ke' => 0,
                    'jumlah_saudara' => 0,
                ];
                $this->model->insertData('tbl_pendaftar', $register);
                $pesan = 'Klik link berikut untuk verifikasi email anda : <a href="' . base_url('controller/appVerification/' . $pass) . '">Verifikasi</a>';
                $mail = $this->sendMail($user, $nama, $pesan);
                $response = [
                    'status' => 'success',
                    'message' => 'Pendaftaran berhasil, silahkan login',
                    'mail' => $mail,
                ];
            }
        }
        echo json_encode($response);
    }
    public function login(Type $var = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'username', 'trim|required|valid_email', [
            'required' => 'Username tidak boleh kosong',
            'valid_email' => 'Username harus berupa email',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'status' => 'validation_failed',
                'errors' => $this->form_validation->error_array(),
            ];
        } else {
            $checkAccount = $this->model->checkAccount($username, $password, 'siswa');
            if ($checkAccount == null) {
                $response = [
                    'status' => 'username not found',
                    'errors' => [
                        'username' => 'Username tidak ditemukan',
                    ],
                ];
            } else {
                if ($checkAccount->verifikasi_email == false) {
                    $response = [
                        'status' => 'email not verified',
                        'errors' => [
                            'username' => 'Email belum diverifikasi',
                        ],
                    ];
                } else {
                    $ses = [
                        'id_user' => $checkAccount->id_register,
                        'username' => $checkAccount->username,
                        'role' => $checkAccount->role,
                        'nama' => $checkAccount->nama,
                        'nisn' => $checkAccount->nisn,
                    ];
                    $this->session->set_userdata($ses);
                    $response = [
                        'status' => 'success',
                        'message' => 'Login berhasil',
                    ];
                }
            }
        }
        echo json_encode($response);
    }
    public function logout(Type $var = null)
    {
        $this->session->sess_destroy();
        redirect('controller/index');
    }
    public function error_page(Type $var = null)
    {
        $data = null;
        $this->load->view('error_page', $data, false);
    }
    public function menuProfil($profil)
    {
        $data['profil'] = $this->model->findData('tbl_informasi', 'judul', $profil)->row();
        $data['content'] = 'profil';
        $this->load->view('home', $data, false);
    }
    // use for verifikasi user
    public function appVerification($token = null)
    {
        if ($token == null) {
            redirect('controller/index');
        } else {
            $this->model->updateData('tbl_user', 'password', $token, ['verifikasi_email' => true]);
            $data['content'] = 'verifikasi';
            $this->load->view('home', $data, false);
        }
    }
}

/* End of file  Controller.php */
