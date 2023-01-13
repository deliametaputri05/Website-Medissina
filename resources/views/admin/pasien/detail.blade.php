@extends('../admin.layout')

@section('title', 'Detail Pasien')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/pasien">Pasien</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pasien</li>
        </ol>
    </div>
    <center>
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <div class="card mb-4 pt-4 pb-4">

                    <div class="row">
                        <div class="col mt-4">

                            <img src="{{asset('storage/' . $ktp) }}" alt="..." class="img-profile" style="max-width: 400px">


                        </div>

                        <div class="col ml-4" style="text-align: left;">
                            <h6 class="m-0 font-weight-bold text-primary mb-3 mt-3" style="text-align: center;">DATA PASIEN</h6>
                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    NIK
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->nik }}
                                </div>
                            </div>
                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Nama
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->nama }}
                                </div>
                            </div>
                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Tempat/Tgl Lahir
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->tempatLahir }} , {{ $date }}
                                </div>
                            </div>
                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Jenis Kelamin
                                </div>
                                @if ( $data->pasien->jk == "P" )
                                <div class="col-8">
                                    : Perempuan
                                </div>
                                @endif

                                @if ($data->pasien->jk == "L")
                                <div class="col-8">
                                    : Laki-laki
                                </div>
                                @endif
                            </div>

                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Alamat
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->alamat }}
                                </div>
                            </div>

                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Agama
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->agama }}
                                </div>
                            </div>

                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Status Nikah
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->status }}
                                </div>
                            </div>

                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    Usia
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->usia }}
                                </div>
                            </div>

                            <div class="row font-weight-bold text-dark mb-1">
                                <div class="col-4 ">
                                    No HP
                                </div>
                                <div class="col-8">
                                    : {{ $data->pasien->noHp }}
                                </div>
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>
    </center>


    <div class="row justify-content-md-center">
        <div class="col-lg-5">
            <div class="card mb-4 pt-4 pb-4">
                <h6 class="m-0 font-weight-bold text-primary mb-3 " style="text-align: center;">DATA PENDAFTARAN</h6>
                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5">
                        Poliklinik Tujuan
                    </div>
                    <div class="col-5">
                        : {{ $data->pasien->poli->nama }}
                    </div>
                </div>

                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5">
                        Tanggal berobat
                    </div>
                    <div class="col-5">
                        : {{ $tglBerobat }}
                    </div>
                </div>



                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5">
                        Jenis Bayar
                    </div>
                    <div class="col-5">
                        : {{ $data->pasien->caraBayar }}
                    </div>
                </div>

                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5">
                        Status Medissina
                    </div>
                    <div class="col-5">
                        : {{ $data->pasien->ceklis }} pernah
                    </div>
                </div>

                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5 mt-1">
                        Status Daftar
                    </div>
                    <div class="col-5 ml-1">
                        @if ($data->status == "Terdaftar")
                        <button class="btn btn-sm mt-1" id="verifikasi" data-toggle="modal" data-target="#modalVerifikasi" data-id="{{$data->id}}" data-nama="{{$data->pasien->nama}}"><span class=" badge badge-warning" style="font-size: 13px;">{{ $data->status  }}</span></button>

                        @endif

                        @if ($data->status == "Terverifikasi")
                        <span class="badge badge-success mt-2" style="font-size: 13px;">{{ $data->status  }}</span>

                        @endif
                    </div>
                </div>


                <div class="row font-weight-bold text-dark mb-1 ">
                    <div class="col-4 ml-5 mt-1">
                        <span>Keluhan</span>
                        <textarea class="mt-2" name="" id="" cols="35" rows="3"> {{ $data->pasien->keluhan}}</textarea>
                    </div>
                    <div class="col-5">
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!---Container Fluid-->
</div>

<!-- Modal Verifikasi -->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Verifikasi Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin verifikasi pendaftaran <span id="namaTesti"></span> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a id="verifPasien" class="btn btn-primary"> Verifikasi</a>

            </div>
        </div>
    </div>
</div>


@endsection