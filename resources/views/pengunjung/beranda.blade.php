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
                                    <h4>Pelayanan Prima</h4>
                                    <p>Kami siap memberikan perlayanan prima untuk kenyamanan pasien dan keluarga pasien</p>
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
                                    <h4>MCU</h4>
                                    <p>Terdapat medical check up sebagai pemeriksaan kesehatan secara menyeluruh</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <img src="../img/logo.png" alt="" width="200px">
                    <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Tentang Kami</h3>
                    <p>Klinik Utama Medissina Lohbener merupakan salah satu unit layanan kesehatan yang berada di Indramayu. Klinik berdiri pada tahun 2004 dan menyediakan pelayanan IDG 24 jam, Apotek, Radiologi, Laboratorium, pelayanan rawat jalan (umum dan spesialis), dan rawat inap.</p>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Pelayanan Kesehatan</a></h4>
                        <p class="description">Memberikan pelayanan kesehatan rawat jalan, rawat inap, penunjang dan IGD 24 Jam</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">BPJS</a></h4>
                        <p class="description">Menerima pelayanan BPJS kesehatan sebagai faskes lanjutan</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="">Medical CPMI</a></h4>
                        <p class="description">Terdapat pelayanan MCU CPMI dengan online siska sertifikasi Kemenkes RI</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$dokter}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Dokter</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$poli}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Poliklinik</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$layanan}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pelayanan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-users"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$daftar}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pendaftaran</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    @endsection