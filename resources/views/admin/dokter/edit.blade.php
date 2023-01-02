@extends('../admin.layout')

@section('title', 'Edit Dokter')

@section('container')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dokter</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">{{ $item->nama }}</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Dokter</li>
        </ol>
    </div>


    <!-- DataTable with Hover -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Dokter</h6>
                </div>
                <div class="card-body">

                    <form class="w-full" action="{{ route('dataDokter.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $item->nama }}">

                        </div>

                        <div class="form-group">
                            <label for="id_poli">Poli</label>
                            <select class="form-control" id="id_poli" name="id_poli" required>

                                <option value={{ $item->id_poli }}>{{ $item->poli->nama }}</option>
                                @foreach ($poli as $org)
                                <option value="{{ $org->id }}">{{ $org->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') ?? $item->jabatan }}">

                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            </div>
                            <br> <br>
                            <div class="avatar avatar-xl">
                                <img src="/storage/{{ $item->gambar }}" width="100" alt="Image" class="avatar-img ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jadwalHari">Jadwal Hari</label>
                            <input type="text" class="form-control" id="jadwalHari" name="jadwalHari" value="{{ old('jadwalHari') ?? $item->jadwalHari }}">
                        </div>
                        <div class="form-group">
                            <label for="jadwalWaktu">Jadwal Waktu</label>
                            <input type="text" class="form-control" id="jadwalWaktu" name="jadwalWaktu" value="{{ old('jadwalWaktu') ?? $item->jadwalWaktu }}">
                        </div>

                        <div class="card-action">

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/dataDokter" class="btn btn-danger" on>Cancel</a>

                        </div>

                    </form>
                </div>
            </div>


        </div>
        <!---Container Fluid-->
    </div>


    @endsection