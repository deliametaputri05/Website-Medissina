@extends('pengunjung.layout')

@section('title', 'MCU Medissina')

@section('container')


<br><br><br><br>


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Medical Check Up</h2>
            <p>Layanan medical check up pada klinik utama medissina</p>
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
                        <a href="https://wa.link/q0m7qp" target="_blank" class="btn-buy">Daftar</a>
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

<!-- end section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Testimoni Medical Check Up</h2>
            <p>Testimoni pasien yang telah menjalani medical check up pada klinik utama medissina</p>
        </div>


        <div class="testimonials-slider swiper" da ta-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach($testi as $testiMcu)

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="storage/{{ $testiMcu->gambar}}" class="testimonial-img" alt="">
                            <h3>{{$testiMcu->nama}}</h3>
                            <h4>{{ $testiMcu->pekerjaan }}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testiMcu->pesan }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach



            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->


<!-- ======= Testimonials Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Berikan Tanggapan</h2>
            <p>Berikan tanggapan anda tentang pelayanan medical check up pada klinik utama medissina</p>
        </div>
        <center>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="{{ route('mcu.store') }}" method="post" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">

                            <!-- <p>Upload Gambar Diri</p> -->

                            <input type="file" style="height: 35px;" class="form-control" name="gambar" id="gambar" required title="Upload Foto">

                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="pesan" rows="5" placeholder="Tuliskan tanggapan anda..." required></textarea>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Kirim Tanggapan</button> -->
                    <div class="text-center"><button type="submit">Kirim Tanggapan</button></div>
                </form>

            </div>
        </center>

    </div>
</section><!-- End Testimonials Section -->
@endsection