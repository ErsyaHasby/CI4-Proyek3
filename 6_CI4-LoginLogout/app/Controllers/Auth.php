<?php

namespace App\Controllers;
use App\Models\mahasiswamodel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();  // ⬅️ pakai UserModel, bukan mahasiswamodel

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/mahasiswa/display');
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
