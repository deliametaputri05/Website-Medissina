<?php

namespace App\Http\Controllers\pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\PasienRequest;

use App\Models\Poli;
use App\Models\Pasien;
use Alert;
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
        $usia = $tahun . " tahun";


        Pasien::create([
            'id_poli' => $request->id_poli,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,
            'tglLahir' => $request->tglLahir,
            'usia' => $usia,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'caraBayar' => $request->caraBayar,
            'ktp' => $request->file('ktp')->store('assets/ktp', 'public'),
            'tglBerobat' => $request->tglBerobat,
            'keluhan' => $request->keluhan,
            'ceklis' => $request->ceklis
        ]);


        // $data['ktp'] = $request->file('ktp')->store('assets/ktp', 'public');

        // dd($data);
        // $data->save();
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
