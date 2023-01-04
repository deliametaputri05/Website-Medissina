<?php

namespace App\Http\Controllers\pengunjung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\TestimoniRequest;
use App\Models\Testimoni;
use App\Models\Mcu;


class PengunjungTestiMcuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mcu = Mcu::paginate();
        $testi = Testimoni::where('tipe', '=', 'mcu')->where('status', '=', 'disetujui')->paginate();

        return view('pengunjung.mcu', [
            'mcu' => $mcu,
            'testi' => $testi,
        ]);
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
    public function store(TestimoniRequest $request)
    {
        $data = $request->all();

        $data['tipe'] = "mcu";
        $data['status'] = "terkirim";
        $data['gambar'] = $request->file('gambar')->store('assets/testimoni', 'public');
        // dd($data);

        Testimoni::create($data);



        return redirect('/mcu');
    }

    /**d
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
