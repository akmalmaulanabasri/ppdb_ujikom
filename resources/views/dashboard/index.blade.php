@extends('dashboard.layout.master')

@section('dahboard.tamu')

<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    <section class="hero pt-5 position-relative d-flex justify-content-center" id="particles-js">
        <div class="d-flex flex-column align-items-center position-absolute">
            <h1 class="text-center text-light">PPDB TP 2024-2025</h1>
            <h1 class="text-center text-light">SMK Wikrama Bogor</h1>
            <a href="{{ route('dashboard.register') }}" class="btn border-info text-info mt-5 px-5"
                id="more">Daftar Sekarang</a>
        </div>
    </section>
</div>

<section class="bg-light py-3" id="kilas">
    <div class="container">
        <h3 class="highlihgt-text">KILAS SMK WIKRAMA</h3>
        <div class="card rounded-0 my-3 bg-5 border-0">
            <div class="card-body">
                <div class="row py-3">
                    <div class="col-sm-12 col-lg-4 my-3">
                        <span class="wikrama-highlight">SMK Wikrama Bogor</span> adalah sekolah menengah kejuruan
                        (SMK) yang terletak di Kota Bogor, Jawa Barat. Sekolah ini didirikan pada tahun 1996 dan
                        merupakan salah satu sekolah terkemuka di Kota Bogor
                    </div>
                    <div class="col-sm-12 col-lg-4 my-3">
                        <span class="wikrama-highlight">SMK Wikrama Bogor</span> menawarkan berbagai program
                        keahlian, seperti Teknik Elektronika, Teknik Kendaraan Ringan, Teknik Komputer dan Jaringan,
                        Teknik Sepeda Motor, dan Teknik Pemesinan.
                    </div>
                    <div class="col-sm-12 col-lg-4 my-3">
                        <span class="wikrama-highlight">SMK Wikrama Bogor</span> menyediakan fasilitas yang memadai
                        untuk mendukung proses belajar mengajar, seperti laboratorium, ruang kelas yang nyaman, dan
                        perpustakaan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5" id="jurusan">
    <div class="jurusan">
        <h3 class="highlihgt-text">JURUSAN SMK WIKRAMA</h3>
        <div class="row my-3 d-flex justify-content-center">
            <div class="col-12">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">PPLG</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_rpl.jpg" alt="" class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">DKV</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_dkv.jpg" alt="" class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">TJKT</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_tjkt.jpg" alt=""
                                                class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">BDP</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_bdp.jpg" alt="" class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">MPLB</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_mplb.jpg" alt=""
                                                class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">HOTEL</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_hotel.jpg" alt=""
                                                class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card mx-2">
                                    <div class="card-body d-flex flex-column">
                                        <span class="nama-jurusan">KULINER</span>
                                        <span class="deskrpisi-jurusan my-2">
                                            Pemograman Perangkat Lunak dan Gim. Mengembangkan Program website,
                                            Aplikasi mobile,
                                            dan Gim
                                        </span>
                                        <div class="img-jurusan">
                                            <img src="asset/img/lab_kuliner.jpg" alt=""
                                                class="img-fluid lab_image">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-5 py-3" id="tentang">
    <div class="container my-3 py-5">
        <h3 class="highlihgt-text">Tentang Wikrama</h3>
        <h5 class="text-dark my-3">
            SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan
            Yayasan
            Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu
            adalah
            sekretaris dengan jumlah hanya 34 siswa.
        </h5>

        <h5 class="text-dark my-3">
            Seiring berjalannya waktu, jumlah siswa SMK Wikrama Bogor setiap tahunnya terus bertambah. Sehingga pada
            tahun 2001, secara bertahap SMK Wikrama Bogor menempati gedung yang lebih luas diatas tanah ± 5000m2,
            berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor. Hingga saat ini, SMK Wikrama Bogor
            memiliki
            1596 siswa dengan 51 guru pendidik.
        </h5>

        <h5 class="text-dark my-3">
            Kesuksesan SMK Wikrama Bogor saat ini tentunya tidak lepas dari sejarah SMK Wikrama Bogor mulai dari
            membentuk visi dan misi, kerja keras hingga diakui dunia internasional hingga prestasi dan pengharagaan
            yang
            didapatkan SMK Wikrama Bogor sejak awal didirikan. Berikut sejarah yang dilalui SMK Wikrama Bogor
            berdasarkan urutan tahun.
        </h5>
    </div>
</section>

@endsection