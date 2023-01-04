@extends('../admin.layout')

@section('title', 'Testimoni Umum')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Testimoni Umum</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Testimoni</li>
            <li class="breadcrumb-item active" aria-current="page">Testimoni Umum</li>
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
                                <a href="{{ route('testiUmum.changeStatus', ['id' => $item->id, 'status' => 'disetujui']) }}" class="btn btn-info btn-sm mr-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endif


                                <form action="{{ route('testiUmum.destroy', $item->id) }}" method="POST">
                                    {!! method_field('delete') . csrf_field() !!}
                                    <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Delete">
                                        <!-- onclick="return initDemos('.alert_demo_7')"    -->
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
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