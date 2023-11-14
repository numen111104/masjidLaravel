<?php

namespace App\Http\Controllers;

use App\Models\JadwalImam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalImamController extends Controller
{
    public $data;
    public function index()
    {
        $jadwalImam = JadwalImam::all();
        return view('masjid.tidore', compact('jadwalImam'));

    }

    public function getJadwalSholat()
    {
        $idkota = 3210;
        $tahun = 2023;
        $bulan = 1;

        $url = "https://api.myquran.com/v1/sholat/jadwal/$idkota/$tahun/$bulan";

        $response = Http::get($url);

        if ($response->successful()) {
            $jadwalSholat = $response->json();
            return view('masjid.tidore', compact('jadwalSholat'));
            // return view('landing-page', compact('jadwalSholat'));
        } else {
            return view('error');
        }
    }

}
