<?php

namespace App\Controllers;
use App\Models\mahasiswamodel;

class mahasiswa extends BaseController
{
    public function display()
    {
        $model = new mahasiswamodel();
        $data['mahasiswa'] = $model->getmahasiswa();
        return view ('mahasiswa_view', $data);
    }

    public function detail($nim)
    {
        $model = new mahasiswamodel();
        $data['mahasiswa'] = $model->getMahasiswaByNim($nim); // Panggil fungsi baru di model
        return view('mahasiswa_detail_view', $data); // Arahkan ke view detail baru
    }
}
