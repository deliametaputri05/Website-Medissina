<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\PoliRequest;
use App\Models\Poli;

use Alert;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli = Poli::paginate();

        return view('admin.poli.index', [
            'poli' => $poli
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.poli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoliRequest $request)
    {
        $data = $request->all();

        $data['gambar'] = $request->file('gambar')->store('assets/poli', 'public');
        // dd($data);

        Poli::create($data);
        Alert::success('Sukses', 'Berhasil menambah data Poli');

        return redirect()->route('dataPoli.index');
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
        $poli = Poli::findOrFail($id);

        return view('admin.poli.edit', [
            'item' => $poli
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PoliRequest $request, $id)
    {
        $data = $request->all();
        $poli = Poli::findOrFail($id);
        // dd($data);
        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/poli', 'public');
        }
        if ($request->file(null)) {
        }

        $poli->update($data);
        Alert::success('Sukses', 'Berhasil mengedit data Poli');
        return redirect()->route('dataPoli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poli = Poli::findOrFail($id);

        $poli->delete();

        return redirect()->route('dataPoli.index');
    }
}
