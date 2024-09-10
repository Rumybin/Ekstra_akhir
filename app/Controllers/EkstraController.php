<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EkstraController extends Controller
{
    public function index()
    {
        $namaHari = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $hariInggris = date('l');
        $hari = $namaHari[$hariInggris];

        // Load view dan kirimkan variabel $hari
        return view('ekstrakurikuler_view', ['hari' => $hari]);
    }
}
