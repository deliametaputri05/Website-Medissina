<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pasien;
use App\Models\Pendaftaran;
use Carbon;
use Alert;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pendaftaran::with(['pasien'])->paginate();

        return view('admin.pasien.index', ['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pendaftaran::findOrFail($id);

        $ktp =  $data->pasien->ktp;
        $date =  Carbon\Carbon::parse($data->pasien->tglLahir)->format('d-m-Y');
        $tglBerobat =  Carbon\Carbon::parse($data->pasien->tglBerobat)->format('d-m-Y');
        // $date = $pasien->tglLahir->format('d-m-Y');


        // dd($dt);

        return view('admin.pasien.detail', ['data' => $data, 'date' => $date, 'ktp' => $ktp, 'tglBerobat' => $tglBerobat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

        $pasien = Pasien::leftJoin('pendaftaran', 'pasien.id', '=', 'pendaftaran.id_pasien')->where('pasien.id', $id);
        $daftar = Pendaftaran::where('id_pasien', $id);

        // dd($daftar);

        $pasien->delete();
        $daftar->delete();
        Alert::success('Sukses', 'Berhasil menghapus data Pasien');
        return redirect()->route('pasien.index');
    }


    public function changeStatus($id, $status)
    {
        $daftar = Pendaftaran::findOrFail($id);

        $daftar->status = $status;
        $daftar->save();

        // dd($testi);
        Alert::success('Sukses', 'Berhasil verifikasi pendaftaran Pasien');

        return back();
    }
}
