@extends('pengunjung.layout')

@section('title', 'MCU Medissina')

@section('container')


<br><br><br><br>


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Medical Check Up</h2>
            <p>Layanan Medical Check Up pada Klinik Utama Medissina</p>
        </div>

        <div class="row">
            @forelse ($mcu as $item)
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                    <h3>{{ $item->nama }}</h3>
                    <h4 style="font-size: 20px;"><sup style="font-size: 12px;">Rp</sup>{{ $item->harga}}</h4>

                    <ul>
                        <p style="white-space: pre-line; text-align: center;">{{ $item->layanan }}</p>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Daftar</a>
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
</section>
@endsection