<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use App\Models\Poli;
use Alert;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::with(['poli'])->paginate();

        return view('admin.dokter.index', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poli = Poli::all();
        return view('admin.dokter.create', compact('poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $request)
    {
        $data = $request->all();

        $data['gambar'] = $request->file('gambar')->store('assets/dokter', 'public');
        // dd($data);

        Dokter::create($data);
        Alert::success('Sukses', 'Berhasil menambah data Dokter');

        return redirect()->route('dataDokter.index');
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
        $dokter = Dokter::findOrFail($id);
        $poli = Poli::all();

        return view('admin.dokter.edit', [
            'item' => $dokter,
            'poli' => $poli
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DokterRequest $request, $id)
    {
        $data = $request->all();
        $dokter = Dokter::findOrFail($id);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/dokter', 'public');
        }
        if ($request->file(null)) {
        }

        $dokter->update($data);
        Alert::success('Sukses', 'Berhasil mengedit data Dokter');

        return redirect()->route('dataDokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);

        $dokter->delete();
        Alert::success('Sukses', 'Berhasil menghapus data Dokter');
        return redirect()->route('dataDokter.index');
    }
}
