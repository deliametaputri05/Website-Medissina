@extends('pengunjung.layout')

@section('title', 'Layanan Medissina')

@section('container')


<br><br><br><br>

<!-- <main id="main"> -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Layanan</h2>
            <p>Layanan Prima pada Klinik Utama Medissina</p>
        </div>
        <div class="row">
            @forelse ($layanan as $item)
            <div class="col-lg-3 col-md-6  align-items-stretch mt-4 ">

                <div class="card">
                    <img src="storage/{{ $item->gambar }}" class="card-img-top mx-auto d-block" style="object-fit: fill;" height="150px" alt="...">
                    <div class="icon-box">

                        <!-- <div class="card-img-top"><img src="storage/{{ $item->gambar }}" alt="..." style="max-width: 200px"></div> -->
                        <h4><a>{{ $item->nama }}</a></h4>
                        <p>{{ $item->deskripsi }}</p>
                    </div>

                </div>
            </div>


            @empty
            <tr>
                <td colspan="6" class="border text-center p-5">Data Tidak Ditemukan</td>
            </tr>
            @endforelse

        </div>

    </div>
</section><!-- End Services Section -->
@endsection