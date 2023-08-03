<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function processLogin()
    {
        // Ambil data dari form login
        // $username = $this->request->getPost('iduser');
        $password = $this->request->getPost('pass');

        // Validasi data

        // Contoh validasi sederhana, sesuaikan dengan kebutuhan Anda
        if ($password === 'c@R315roum!!!') {
            // Jika data valid, arahkan ke halaman sukses
            $simpan_session = [
                'password' => $password,
                'logged_in' => true
            ];

            session()->set($simpan_session);
            return redirect()->to('admin');
        } else {
            // Jika data tidak valid, tampilkan pesan error dan arahkan kembali ke halaman login
            return redirect()->back()->with('error', 'Username or password is incorrect');
        }
    }

    public function logOut()
    {
        session()->destroy();
        return view('formSurvey');
        // return redirect()->to('home');
    }
}
