@extends('pengunjung.layout')

@section('title', 'Klinik Utama Medissina')

@section('container')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1 style="font-size: 40px;">Selamat Datang di Medissina</h1>
        <h2>the heaART of HOSPITALity</h2>
        <!-- <a href="#about" class="btn-get-started scrollto">Daftar Berobat</a> -->
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Kenapa memilih Medissina ?</h3>
                        <p>
                            Kami perusahaan yang bergerak dibidang kesehatan, melayani masyarakat dengan sepenuh hati dan memberi pelayanan
                            terbaik. <br> <br> "Sehat Selalu Bersama Medissina"
                        </p>
                        <!-- <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Medical CPMI</h4>
                                    <p>Medical Pra dan Medical Full <br>Online Sisko Sertifikasi Kemenkes RI</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>IGD 24 Jam</h4>
                                    <p>Kami siap memberikan pertolongan pertama hingga penanganan intensif selama 24 jam </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>USG 4 Dimensi</h4>
                                    <p>USG 4 dimensi mampu menyajikan gambar bergerak layaknya video. Sehingga, bisa melihat aktivitas janin secara lebih jelas</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->



    @endsection