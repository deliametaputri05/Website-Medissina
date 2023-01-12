<?php

namespace App\Http\Controllers\pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\PasienRequest;

use App\Models\Poli;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use Alert;
use BaconQrCode\Renderer\Path\Path;
use DateTime;

use Carbon;


class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli = Poli::all();
        $date = new DateTime('today');
        $datetime = Carbon\Carbon::now();

        return view('pengunjung.daftar', compact('poli', 'datetime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $awal = new DateTime($request->tglLahir);
        $akhir = new DateTime('today');
        $tahun = $akhir->diff($awal)->y;
        $bulan = $akhir->diff($awal)->m;
        $usia = $tahun . " Th";


        $pasien = new Pasien;

        $pasien->id_poli = $request->id_poli;
        $pasien->nik = $request->nik;
        $pasien->nama = $request->nama;
        $pasien->tempatLahir = $request->tempatLahir;
        $pasien->tglLahir = $request->tglLahir;
        $pasien->usia = $usia;
        $pasien->jk = $request->jk;
        $pasien->agama = $request->agama;
        $pasien->status = $request->status;
        $pasien->alamat = $request->alamat;
        $pasien->noHp = $request->noHp;
        $pasien->caraBayar = $request->caraBayar;
        $pasien->ktp = $request->file('ktp')->store('assets/ktp', 'public');
        $pasien->tglBerobat = $request->tglBerobat;
        $pasien->keluhan = $request->keluhan;
        $pasien->ceklis = $request->ceklis;
        $pasien->save();

        $daftar = new Pendaftaran;

        $daftar->id_pasien = $pasien->id;
        $daftar->status = "Terdaftar";
        $daftar->save();

        Alert::success('Berhasil daftar berobat', 'Silahkan untuk daftar ulang di loket pendaftaran di tanggal berobat');

        return redirect('/daftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
