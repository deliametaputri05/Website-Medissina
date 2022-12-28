@extends('../admin.layout')

@section('title', 'Create Layanan')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Layanan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Layanan</li>
            <li class="breadcrumb-item active" aria-current="page">Create Layanan</li>
        </ol>
    </div>


    <!-- DataTable with Hover -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Data Layanan</h6>
                </div>
                <div class="card-body">

                    <form class="w-full" action="{{ route('dataLayanan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Layanan">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            </div>
                        </div>

                        <div class="card-action">

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/dataLayanan" class="btn btn-danger" on>Cancel</a>

                        </div>

                    </form>
                </div>
            </div>


        </div>
        <!---Container Fluid-->
    </div>


    @endsection