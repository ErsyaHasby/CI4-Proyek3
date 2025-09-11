<?php

namespace App\Controllers;
use App\Models\mahasiswamodel;

class mahasiswa extends BaseController
{
    public function display()
    {
        // cek apakah sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // kalau sudah login, ambil data mahasiswa
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getMahasiswa();

        return view('mahasiswa_view', $data);
    }


    public function detail($nim)
    {
        $model = new mahasiswamodel();
        $data['mahasiswa'] = $model->getMahasiswaByNim($nim); // Panggil fungsi baru di model
        return view('mahasiswa_detail_view', $data); // Arahkan ke view detail baru
    }

}
