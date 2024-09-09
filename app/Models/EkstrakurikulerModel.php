<?php

namespace App\Models;

use CodeIgniter\Model;

class EkstrakurikulerModel extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'Kode';
    protected $allowedFields = ['Nama_ekstrakurikuler', 'Jadwal_ekstrakurikuler'];

    public function getEkstrakurikuler()
    {
        return $this->findAll();
    }
    

}
