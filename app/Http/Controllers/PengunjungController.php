<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('pengunjung.layanan');
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
