@extends('pengunjung.layout')

@section('title', 'Daftar Berobat')

@section('container')


<br><br><br><br>

<!-- <main id="main"> -->


<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Daftar Berobat</h2>
            <!-- <h2>{{$datetime}}</h2> -->
            <p>Silahkan mengisi data formulir pendaftaran dengan lengkap dan benar</p>
        </div>

        <form action="{{route('daftar.store')}}" method="post" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="nik" class="mb-2" style="font-size: 15px; font-weight: bold;">NIK</label>
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" data-rule="minlen:16" data-msg="Please enter at least 16 chars" required>

                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="nama" class="mb-2" style="font-size: 15px; font-weight: bold;">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pasien" required>

                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="noHp" class="mb-2" style="font-size: 15px; font-weight: bold;">Nomor Hp/Whatsapp</label>
                    <input type="tel" class="form-control" name="noHp" id="noHp" placeholder="Nomor Hp aktif" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <label for="tempatLahir" class="mb-2" style="font-size: 15px; font-weight: bold;">Tempat Lahir</label>
                    <input type="text" name="tempatLahir" class="form-control" id="tempatLahir" placeholder="Tempat Lahir" required>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="tglLahir" class="mb-2" style="font-size: 15px; font-weight: bold;">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="Tanggal Lahir" required>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="jk" class="mb-2" style="font-size: 15px; font-weight: bold;">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select" required>
                        <option value=""> Pilih Jenis Kelamin </option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>

                    </select>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <label for="agama" class="mb-2" style="font-size: 15px; font-weight: bold;">Agama</label>
                    <select name="agama" id="agama" class="form-select" required>
                        <option value=""> Pilih Agama </option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong hu chu">Kong Hu Chu</option>

                    </select>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="status" class="mb-2" style="font-size: 15px; font-weight: bold;">Status Perkawinan</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value=""> Pilih Status Perkawinan </option>
                        <option value="Belum menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Janda/Duda">Janda / Duda</option>

                    </select>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="alamat" class="mb-2" style="font-size: 15px; font-weight: bold;">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat: Jl. -Desa -Kec -Kab" required>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <label for="tglBerobat" class="mb-2" style="font-size: 15px; font-weight: bold;">Tanggal Berobat</label>
                    <input type="date" class="form-control" name="tglBerobat" id="tglBerobat" placeholder="Tanggal Berobat" required>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="caraBayar" class="mb-2" style="font-size: 15px; font-weight: bold;">Jenis Bayar</label>
                    <select name="caraBayar" id="caraBayar" class="form-select" required>
                        <option value=""> Pilih Jenis Bayar </option>
                        <option value="UMUM">UMUM</option>
                        <option value="BPJS">BPJS</option>

                    </select>

                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="ceklis" class="mb-2" style="font-size: 15px; font-weight: bold;">Apakah sudah pernah berobat di Medissina?</label>
                    <select name="ceklis" id="ceklis" class="form-select" required>
                        <!-- <option value=""> Pilih Jenis Bayar </option> -->
                        <option value="Belum">Belum</option>
                        <option value="Sudah">Sudah</option>

                    </select>


                </div>
            </div>
            <div class="row">

                <div class="col-md-6 form-group mt-3">
                    <label for="id_poli" class="mb-2" style="font-size: 15px; font-weight: bold;">Poliklinik Tujuan
                        <!-- <span style="font-size: 13px;">(dianjurkan cek jadwal dokter terlebih dahulu)</span> -->
                    </label>
                    <select name="id_poli" id="id_poli" class="form-select" required>
                        <option value=""> Pilih Layanan </option>
                        @foreach ($poli as $org)
                        <option value="{{ $org->id }}">{{ $org->nama }}</option>
                        @endforeach

                    </select>

                </div>

                <div class="col-md-6 form-group mt-3">
                    <label for="ktp" class="mb-2" style="font-size: 15px; font-weight: bold;">Upload KTP</label>
                    <input type="file" class="form-control" name="ktp" id="ktp" placeholder="Upload foto KTP asli" required>

                </div>
            </div>

            <div class="form-group mt-3">
                <label for="keluhan" class="mb-2" style="font-size: 15px; font-weight: bold;">Isi Keluhan</label>
                <textarea class="form-control" name="keluhan" id="keluhan" rows="5" placeholder="Keluhan pasien ..."></textarea>

            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Daftar</button></div>
        </form>

    </div>
</section>
<!-- <--End Appointment Section -->


@endsection