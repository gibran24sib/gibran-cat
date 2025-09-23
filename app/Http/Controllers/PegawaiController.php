<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Nama
        $data['name'] = 'Gibran Ardelio';

        // Hitung umur dari tanggal lahir (pakai DateTime biasa)
        $birthdate = date_create('2006-04-25');
        $today = date_create(date('Y-m-d'));
        $age = date_diff($birthdate, $today)->y;
        $data['my_age'] = $age;

        // Hobi
        $data['hobbies'] = ['Olahraga', 'Membaca', 'Ngoding', 'Lalok', 'Travelling'];

        // Tanggal harus wisuda
        $tglWisuda = '2028-09-05';
        $data['tgl_harus_wisuda'] = $tglWisuda;

        // Jarak hari ke wisuda
        $tglWisudaTime = strtotime($tglWisuda);
        $todayTime = strtotime(date('Y-m-d'));
        $selisihHari = round(($tglWisudaTime - $todayTime) / (60 * 60 * 24));
        $data['time_to_study_left'] = $selisihHari;

        // Semester
        $data['current_semester'] = 3;

        // Info semester
        if ($data['current_semester'] < 2) {
            $data['semester_info'] = 'Masih Awal, Kejar TAK!';
        } else {
            $data['semester_info'] = 'Jangan main-main, kurang-kurangi main game!';
        }

        // Cita-cita
        $data['future_goal'] = 'Menjadi Software Engineer';

        return view('pegawai', $data);
    }
}
