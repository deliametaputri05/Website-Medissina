<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\McuRequest;
use App\Models\Mcu;
use Alert;


class McuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mcu = Mcu::paginate();

        return view('admin.mcu.index', [
            'mcu' => $mcu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mcu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(McuRequest $request)
    {
        $data = $request->all();

        $data['gambar'] = $request->file('gambar')->store('assets/mcu', 'public');
        // dd($data);

        Mcu::create($data);
        Alert::success('Sukses', 'Berhasil menambah data Mcu');

        return redirect()->route('dataMcu.index');
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
        $mcu = Mcu::findOrFail($id);

        return view('admin.mcu.edit', [
            'item' => $mcu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(McuRequest $request, $id)
    {
        $data = $request->all();
        $mcu = Mcu::findOrFail($id);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/mcu', 'public');
        }
        if ($request->file(null)) {
        }

        $mcu->update($data);
        Alert::success('Sukses', 'Berhasil mengedit data Mcu');

        return redirect()->route('dataMcu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mcu = Mcu::findOrFail($id);

        $mcu->delete();
        return redirect()->route('dataMcu.index');
    }
}
