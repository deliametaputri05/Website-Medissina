<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimoniRequest;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Mcu;
use Alert;


class AdminTestiMcuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mcu = Mcu::paginate();
        $testi = Testimoni::where('tipe', '=', 'mcu')->paginate();

        return view('admin.mcu.testimoni.index', [
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
    public function store(Request $request)
    {
        //
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
    public function update(TestimoniRequest $request, $id)
    {
        $data = $request->all();
        $testi = Testimoni::findOrFail($id);

        $data['status'] = "disetujui";
        $testi->update($data);

        dd($testi);


        return redirect()->route('testiMcu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testi = Testimoni::findOrFail($id);

        $testi->delete();

        Alert::success('Sukses', 'Berhasil menghapus data Testi Mcu');
        return redirect()->route('testiMcu.index');
    }


    public function changeStatus($id, $status)
    {
        $testi = Testimoni::findOrFail($id);

        $testi->status = $status;
        $testi->save();

        // dd($testi);
        Alert::success('Sukses', 'Berhasil verifikasi Testi Mcu');


        return redirect()->route('testiMcu.index');
    }
}
