<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstra extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['kode', 'Nama_ekstrakurikuler', 'Jadwal_ekstrakurikuler'];

    public function getEkstraByDay($hari)
{
    // Menggunakan where dengan nama kolom yang benar
    return $this->where('Jadwal_ekstrakurikuler', $hari)->findAll();
}

}
