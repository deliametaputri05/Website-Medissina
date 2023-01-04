<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Mcu;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Pendaftaran;
use App\Models\Testimoni;

class PengunjungController extends Controller
{
    //
    public function index()

    {
        $layanan = Layanan::all()->count();
        $dokter = Dokter::all()->count();
        $poli = Poli::all()->count();
        $daftar = Pendaftaran::all()->count();
        $testi = Testimoni::all()->count();

        $test = Testimoni::where('tipe', '=', 'umum')->where('status', '=', 'disetujui')->paginate();

        return view('pengunjung.beranda', compact('layanan', 'dokter', 'poli', 'daftar', 'testi', 'test'));
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
        $poli = Poli::paginate();
        $dokter = Dokter::paginate();
        // dd($poli);

        return view('pengunjung.dokter', [
            'poli' => $poli,
            'dokter' => $dokter
        ]);
    }

    public function kontak()

    {

        return view('pengunjung.kontak');
    }
}
