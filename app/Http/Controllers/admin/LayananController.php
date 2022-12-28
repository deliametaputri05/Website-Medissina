<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\LayananRequest;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::paginate();

        return view('admin.layanan.index', [
            'layanan' => $layanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LayananRequest $request)
    {
        $data = $request->all();

        $data['gambar'] = $request->file('gambar')->store('assets/layanan', 'public');
        // dd($data);

        Layanan::create($data);



        return redirect()->route('dataLayanan.index');
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
        $layanan = Layanan::findOrFail($id);
        // dd($layanan);

        return view('admin.layanan.edit', [
            'item' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LayananRequest $request, $id)
    {
        $data = $request->all();
        $layanan = Layanan::findOrFail($id);
        // dd($data);
        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/layanan', 'public');
        }
        if ($request->file(null)) {
        }

        $layanan->update($data);
        // dd($request);

        return redirect()->route('dataLayanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        // dd($layanan);
        $layanan->delete();

        return redirect()->route('dataLayanan.index');
    }
}
