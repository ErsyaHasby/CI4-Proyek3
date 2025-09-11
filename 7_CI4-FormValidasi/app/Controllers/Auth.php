<?php

namespace App\Controllers;

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

        // Aturan validasi
        $rules = [
            'username' => [
                'rules' => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required' => 'Username wajib diisi',
                    'min_length' => 'Username minimal 3 karakter',
                    'max_length' => 'Username maksimal 20 karakter',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password wajib diisi',
                    'min_length' => 'Password minimal 6 karakter',
                ]
            ]
        ];

        // Jika validasi gagal
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Jika validasi sukses → cek user di database
        $model = new UserModel();
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
