<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstra extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['Nama_ekstrakurikuler', 'Jadwal_ekstrakurikuler'];

    public function getEkstraByDay($hariini)
{
    // Menggunakan select untuk memilih kolom yang diinginkan
    return $this->select('Nama_ekstrakurikuler')
                ->where('Jadwal_ekstrakurikuler', $hariini)
                ->findAll();
}


}
