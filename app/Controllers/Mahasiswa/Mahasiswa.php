<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\Config\Config;

class Mahasiswa extends BaseController
{
    function __construct()
    {
        $this->m_mahasiswa = new MahasiswaModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }
    public function loginmhs()
    {
        $datamhs = [];
        echo view("mahasiswa/v_loginmhs", $datamhs);
    }

    public function homemahasiswa()
    {
        echo view("mahasiswa/v_homemahasiswa");
    }

    function logoutmhs()
    {
        delete_cookie("cookie_username");
        delete_cookie("cookie_password");
        session()->destroy();
        if (session()->get('akun_username') != '') {
            session()->setFlashdata("success", "Anda telah berhasil logout");
        }
        echo view('mahasiswa/v_loginmhs');
    }

    public function homestat()
    {
        echo view("v_homestat");
    }
    function lupapassword()
    {
        $err = [];
        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getVar('username');
            if ($username == '') {
                $err[] = "Silakan masukkan username atau email yang anda punya";
            }
            if (empty($err)) {
                $data = $this->m_mahasiswa->getData($username);
                if (empty($data)) {
                    $err[] = "Akun yang kamu masukkan tidak terdata";
                }
            }
            if (empty($err)) {
                $email = $data['email'];
                $token = md5(date('ymdhis'));

                $link = site_url("admin/resetpassword/?email=$email&token=$token");
                $attachment = "";
                $to = $email;
                $title = "Reset Password";
                $message = "Berikut ini adalah link untuk melakukan reset password Anda.";
                $message .= "Silakan klik link berikut ini $link";

                kirim_email($attachment, $to, $title, $message);

                $dataUpdate = [
                    'email' => $email,
                    'token' => $token
                ];
                $this->m_mahasiswa->updateData($dataUpdate);
                session()->setFlashdata("success", "Email untuk recovery sudah kami kirimkan ke email anda");
            }
            if ($err) {
                session()->setFlashdata("username", $username);
                session()->setFlashdata("warning", $err);
            }
            return redirect()->to("admin/lupapassword");
        }
        echo view("admin/v_lupapassword");
    }
    function resetpassword()
    {
        $err = [];
        $email = $this->request->getVar('email');
        $token = $this->request->getVar('token');
        if ($email != '' and $token != '') {
            $dataAkun = $this->m_mahasiswa->getData($email); //<-- cek di tabel admin
            if ($dataAkun['token'] != $token) {
                $err[] = "Token tidak valid";
            }
        } else {
            $err[] = "Parameter yang dikirimkan tidak valid";
        }

        if ($err) {
            session()->setFlashdata("warning", $err);
        }

        if ($this->request->getMethod() == 'post') {
            $aturan = [
                'password' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk password adalah 5 karakter'
                    ]
                ],
                'konfirmasi_password' => [
                    'rules' => 'required|min_length[5]|matches[password]',
                    'errors' => [
                        'required' => 'Konfirmasi password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk konfirmasi password adalah 5 karakter',
                        'matches' => 'Konfirmasi password tidak sesuai dengan password yang diisikan'
                    ]
                ]
            ];

            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $dataUpdate = [
                    'email' => $email,
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'token' => null
                ];
                $this->m_mahasiswa->updateData($dataUpdate);
                session()->setFlashdata('success', 'Password berhasil direset, silakan login');

                delete_cookie('cookie_username');
                delete_cookie('cookie_password');

                return redirect()->to('admin/login')->withCookies();
            }
        }

        echo view("admin/v_resetpassword");
    }
}
