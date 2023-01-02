@extends('pengunjung.layout')

@section('title', 'Dokter Medissina')

@section('container')


<br><br><br><br>



<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container">

        <div class="section-title">
            <h2>Dokter</h2>
            <p>Dokter dan Jadwal Praktek Klinik Utama Medissina</p>
        </div>

        <div class="row">
            @foreach ( $dokter as $dr )


            <div class="col-lg-6 mt-4 mt-lg-0 mb-4">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="storage/{{$dr->gambar}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4 style="font-size: 16px;">{{ $dr->nama }}</h4>
                        <span style="font-size: 13px;">{{ $dr->jabatan }}</span>
                        <!-- class="fst-italic" -->
                        <p>Hari : {{ $dr->jadwalHari }}</p>
                        <p>Pukul : {{ $dr->jadwalWaktu }}</p>
                        <span></span>

                        <h4 class="mt-3" style="font-size: 15px;">{{ $dr->poli->nama }}</h4>

                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section><!-- End Doctors Section -->

<!-- ======= Departments Section ======= -->
<!-- <section id="departments" class="departments">
    <div class="container">

        <div class="section-title">
            <h2>Poliklinik</h2>
            <p>Poliklinik pada Klinik Utama Medissina</p>
        </div>

        <div class="row gy-4">
            @forelse ($poli as $item)
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-{{$item->id}} "> {{ $item->nama }}</a>

                    </li>

                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-pane" id="tab-{{ $item->id }}">
                        <div class="row gy-4">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>{{ $item->nama }}</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                <p>{{ $item->deskripsi }}/p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="storage/{{ $item->gambar }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            <p lass="border text-center p-5">Data Tidak Ditemukan</p>

            @endforelse
        </div>

    </div>
</section> -->
<!-- End Departments Section -->

<script type="text/javascripts">
    $(document).on('click,'
    nav - link ', function() {
    $(this).addClass('active').siblings().removeClass('active')
    })
</script>

@endsection