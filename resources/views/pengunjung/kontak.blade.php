@extends('pengunjung.layout')

@section('title', 'Kontak Medissina')

@section('container')


<br><br><br><br>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Kontak</h2>
            <p>Kontak Klinik Utama Medissina Lohbener yang Dapat di Hubungi</p>
        </div>
    </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9364024053457!2d108.26889011497424!3d-6.402195864398045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb8702fe6055b%3A0x28ad2bd5b6d4fd1b!2sKlinik%20Utama%20Medissina!5e0!3m2!1sid!2sid!4v1671596956376!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Raya Celeng Barat No.57 Lohbener - Indramayu</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>medissina.lohbener@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+6287727447216</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                <div class="section-title">
                    <h2 style="font-size: 18px;">Berikan Tanggapan</h2>
                    <p>Berikan tanggapan anda tentang pelayanan kesehatan pada klinik utama medissina</p>
                </div>

                <form action="{{ route('testimoni.store') }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
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
                    <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->



@endsection