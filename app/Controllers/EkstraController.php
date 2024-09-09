<?php

namespace App\Controllers;

use App\Models\ModelEkstra;

class EkstraController extends BaseController
{
    public function index()
{
    // Dapatkan hari saat ini
    $hari = date('l');

    // Terjemahkan nama hari ke dalam bahasa Indonesia
    $hari_mapping = [
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu',
        'Sunday' => 'Minggu'
    ];

    $hari_sekarang = $hari_mapping[$hari];

    // Ambil data ekstrakurikuler berdasarkan hari ini
    $model = new ModelEkstra();
    $data['ekstrakurikuler'] = $model->getEkstraByDay($hari_sekarang);

    // Debugging output untuk memastikan semuanya benar
    echo "Hari sekarang: " . $hari_sekarang;
    var_dump($data['ekstrakurikuler']);

    // Kirim data ke view
    return view('ekstra_view', $data);
}
}