<?php

namespace App\Models;
use CodeIgniter\Model;

class mahasiswamodel extends Model
{
    protected $table = 'mahasiswa';

    public function getmahasiswa()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM mahasiswa');
        return $query->getResultArray();
    }

    public function getMahasiswaByNim($nim)
    {
        // Menggunakan query builder yang lebih aman untuk mengambil data
        // berdasarkan nim dan mengembalikan satu baris data saja.
        return $this->where(['nim' => $nim])->first();
    }
}
