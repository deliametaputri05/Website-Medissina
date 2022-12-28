@extends('../admin.layout')

@section('title', 'Master | Layanan')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Layanan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Layanan</li>
            <li class="breadcrumb-item active" aria-current="page">Data Layanan</li>
        </ol>
    </div>

    <!-- DataTable with Hover -->
    <div class="col-lg-12">
        <div>
            <a href="/addLayanan" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <br>

        <div class="card mb-4">
            <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
            </div> -->

            <div class="table-responsive p-3">
                <table class="display table align-items-center table-striped table-hover text-center " id="dataTableHover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
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
                        @forelse ($layanan as $item)
                        <tr>
                            <td>{{ $layanan->count() * ($layanan->currentPage() - 1) + $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <center>
                                    <div style="width: 300px; white-space: normal; overflow: hidden; text-overflow: ellipsis;">{{ $item->deskripsi }}</div>
                                </center>
                            </td>
                            <td>
                                <!-- <br> -->
                                <center>
                                    <!-- <div class="avatar avatar-xl "> -->
                                    <!-- <img src="/storage/assets/layanan/xObZoWeOPUYWID7ZyBa9m9iB5mPYqBaewENf8zo8.jpg" alt="..." class="avatar-img rounded-circle" width="100px"> -->
                                    <img src="storage/{{ $item->gambar }}" alt="..." class="img-profile" style="max-width: 100px">

                                    <!-- </div> -->
                                </center>
                                <br>
                                <br>
                            </td>
                            <td>
                                <div class="row align-items-center" style="display: inline-flex;">



                                    <a href="{{ route('dataLayanan.edit', $item->id) }}" class="btn btn-info btn-sm mr-1">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('dataLayanan.destroy', $item->id) }}" method="POST">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Delete">
                                            <!-- onclick="return initDemos('.alert_demo_7')"    -->
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>







                                </div>

                                <!-- <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a> -->


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