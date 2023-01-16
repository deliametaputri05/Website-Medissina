@extends('../admin.layout')

@section('title', 'Testimoni Mcu')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Testimoni Mcu</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Testimoni Mcu</li>
        </ol>
    </div>



    <div class="card mb-4">
        <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
            </div> -->

        <div class="table-responsive p-3" style="font-size: 14px;">
            <table class="display table align-items-center table-striped table-hover text-center " id="dataTableHover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Pekerjaan</th>
                        <th>Pesan</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <!-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> -->
                <tbody>
                    @forelse ($testi as $item)
                    <tr>
                        <td>{{ $testi->count() * ($testi->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{ $item->nama }}

                            <br><span class="font-italic pt-2"> {{ $item->email }}</span>

                        </td>

                        <td>
                            <!-- <br> -->
                            <center>
                                <!-- <div class="avatar avatar-xl "> -->
                                <!-- <img src="/storage/assets/layanan/xObZoWeOPUYWID7ZyBa9m9iB5mPYqBaewENf8zo8.jpg" alt="..." class="avatar-img rounded-circle" width="100px"> -->
                                <img src="storage/{{ $item->gambar }}" alt="..." class="img-profile" style="max-width: 70px">

                                <!-- </div> -->
                            </center>
                            <br>
                            <br>
                        </td>
                        <td>{{ $item->pekerjaan }}</td>
                        <td>
                            <center>
                                <div style="width: 250px; white-space: pre-line; overflow: hidden; text-overflow: ellipsis; text-align: left;">{{ $item->pesan }}</div>
                            </center>
                        </td>
                        <td>
                            @if ($item->status == "disetujui")

                            <span class="badge badge-success" style="font-size: 14px;">{{$item->status}}</span>
                            @endif

                            @if ($item->status == "terkirim")
                            <span class="badge badge-warning" style="font-size: 14px;">{{ $item->status  }}</span> </button>

                            @endif

                        </td>
                        <td>

                            <div class="row justify-content-center" style="display: inline-flex; width: 100px;">
                                @if ($item->status == "terkirim")

                                <button id="verifikasi" type="button" class="btn btn-info btn-sm mr-1" data-toggle="modal" data-target="#modalVerifikasi" data-id="{{$item->id}}" data-nama="{{$item->nama}}">

                                    <i class="fas fa-check-square"></i>
                                </button>
                                @endif

                                <button id="delete" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete" data-id="{{$item->id}}" data-nama="{{$item->nama}}">

                                    <i class="fa fa-trash"></i>
                                </button>


                                <!-- Modal Delete -->
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
                                                Yakin menghapus data <span id="nama"></span> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>

                                                <form id="deleteTestiMcu" method="POST">
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
                                                Yakin verifikasi testimoni <span id="namaTesti"></span> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                                <a id="verifMcu" class="btn btn-primary"> Verifikasi</a>

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