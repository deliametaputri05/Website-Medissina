<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Mcu;

class PengunjungController extends Controller
{
    //
    public function index()

    {

        return view('pengunjung.beranda');
    }

    public function tentang()

    {

        return view('pengunjung.tentang');
    }

    public function layanan()
    {
        $layanan = Layanan::paginate();

        return view('pengunjung.layanan', [
            'layanan' => $layanan
        ]);
    }

    public function mcu()
    {
        $mcu = Mcu::paginate();

        return view('pengunjung.mcu', [
            'mcu' => $mcu
        ]);
    }

    public function dokter()

    {

        return view('pengunjung.dokter');
    }

    public function kontak()

    {

        return view('pengunjung.kontak');
    }
}
