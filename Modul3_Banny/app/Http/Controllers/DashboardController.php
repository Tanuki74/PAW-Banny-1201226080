<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 

        $nama = "Banny Juanda";
        $jam = date("H");
        $waktu = date("H:i:s");
        $salam = "";
        if ($jam >= 5 && $jam < 12) {
            $salam = "Selamat pagi";
        } elseif ($jam >= 12 && $jam < 15) {
            $salam = "Selamat siang";
        } elseif ($jam >= 15 && $jam < 18) {
            $salam = "Selamat sore";
        } else {
            $salam = "Selamat malam";
        }
        $tanggal = $this->getTanggal();
        return view('dashboard', compact('nama', 'jam', 'waktu', 'salam', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date("d-m-Y");
    }
}
