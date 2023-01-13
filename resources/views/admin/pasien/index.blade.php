@extends('../admin.layout')

@section('title', 'Pasien')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien Registrasi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Dokter</li>
            <li class="breadcrumb-item active" aria-current="page">Data Layanan</li>
        </ol>
    </div>

    <!-- DataTable with Hover -->
    <div class="col-lg-12">
        <!-- <div>
            <a href="{{ route('dataDokter.create')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div> -->
        <!-- <br> -->

        <div class="card mb-4">
            <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
            </div> -->

            <div class="table-responsive p-3" style="font-size: 13px;">
                <table class="display table align-items-center table-striped table-hover text-center " id="dataTableHover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pasien</th>
                            <th>Umur</th>
                            <th>Poliklinik</th>
                            <th>Alamat</th>
                            <th>Status Daftar</th>
                            <th>Tgl Berobat</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody class="p-0">
                        @forelse ($pasien as $item)

                        <tr>

                            <td>{{ $pasien->count() * ($pasien->currentPage() - 1) + $loop->iteration }}</td>
                            <td style="text-align: left;">{{ $item->pasien->nama }}</td>
                            <td style="text-align: left;">{{ $item->pasien->usia }}</td>
                            <td style="text-align: left;">{{ $item->pasien->poli->nama}}</td>
                            <td style="text-align: left;">{{ $item->pasien->alamat}}</td>

                            <td>

                                @if ($item->status == "Terdaftar")
                                <button class="btn btn-sm" id="verifikasi" data-toggle="modal" data-target="#modalVerifikasi" data-id="{{$item->id}}" data-nama="{{$item->pasien->nama}}"><span class=" badge badge-warning" style="font-size: 13px;">{{ $item->status  }}</span></button>

                                @endif

                                @if ($item->status == "Terverifikasi")
                                <span class="badge badge-success" style="font-size: 13px;">{{ $item->status  }}</span>

                                @endif
                            </td>
                            <td>{{ $item->pasien->tglBerobat}}</td>

                            <td>
                                <div class="row justify-content-center" style="display: inline-flex;">

                                    <a href="{{ route('pasien.show', $item->id)}}" class="btn btn-info btn-sm mr-1">
                                        <i class="fa fa-user"></i>
                                    </a>

                                    <button id="delete" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" data-id="{{$item->pasien->id}}" data-nama="{{$item->pasien->nama}}">

                                        <i class="fa fa-trash"></i>
                                    </button>


                                    <!-- Modal Center -->
                                    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin menghapus pasien <span id="nama"></span> ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>

                                                    <form id="deletePasien" method="POST">
                                                        {!! method_field('delete') . csrf_field() !!}
                                                        <button type="submit" class="btn btn-primary">Delete</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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








                                </div>
                            </td>



                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="border text-center p-5">Data Tidak Ditemukan</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Row-->

</div>
<!---Container Fluid-->
</div>


<!-- <script>
    // display a modal (small modal)
    $('#deleteLyn').click(function() {
        // event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            method: "DELETE",
        })
    });
</script> -->

@endsection