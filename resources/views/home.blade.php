<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BnR Skincare')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #E8F5E9; position: fixed; top: 0; width: 100%; z-index: 1001;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('asset/logo.png') }}" alt="Logo" height="40" class="me-2">
                <strong style="color: #212121;">BnR Skincare</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" style="color: #424242;" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: #424242;" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" style="color: #424242;" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: #424242;" href="#kontak">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #424242;" href="#" id="lainnyaDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Artikel</a>
                        <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                            <li><a class="dropdown-item" style="color: #424242;" href="/konsultasi">Konsultasi Kulit</a>
                            </li>
                            <li><a class="dropdown-item" style="color: #424242;" href="/sponsor">Ajukan Sponsor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" style="color: #424242;" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main style="width: 100%; min-height: 100vh; padding-top: 76px;">
        {{-- HERO --}}
        <section class="py-5 text-center" style="background-color: #E8F5E9;">
            <div class="container">
                <h1 class="fw-bold" style="color: #212121;">Cantik, Sehat, dan Penuh Berkah</h1>
                <p class="lead" style="color: #424242;">Perawatan kulit aman, halal, dan alami untuk semua kalangan.
                </p>
                <a href="#produk" class="btn btn-lg" style="background-color: #FBC02D; color: #212121;">Lihat Produk</a>
            </div>
        </section>

        {{-- TENTANG KAMI --}}
        <section class="py-5" id="tentang">
            <div class="container">
                <div class="row align-items-center">
                    {{-- Gambar --}}
                    <div class="col-md-6 text-center mb-4 mb-md-0">
                        <img src="{{ asset('asset/shopping.jpg') }}" class="img-fluid rounded" alt="Serum">
                    </div>

                    {{-- Teks --}}
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-4" style="color: #388E3C;">Tentang Kami</h2>
                        <p style="text-align: justify; color: #424242;">
                            BnR Skincare adalah brand perawatan kulit yang berdiri atas dasar kepedulian terhadap
                            kebutuhan wanita Indonesia akan produk skincare yang tidak hanya efektif, namun juga
                            aman, halal, dan alami. Kami memahami bahwa setiap wanita memiliki keinginan untuk
                            tampil cantik dan percaya diri, namun sering kali dibayangi oleh kekhawatiran terhadap
                            kandungan kimia berbahaya atau produk yang tidak sesuai dengan nilai-nilai spiritual
                            mereka.

                            Kami menghadirkan rangkaian perawatan kulit yang diformulasikan dengan teknologi ilmiah
                            terkini dan bahan aktif alami pilihan. Setiap produk kami telah melalui proses uji
                            kualitas untuk memastikan keamanan dan efektivitasnya bagi semua jenis kulit, termasuk
                            kulit sensitif, ibu hamil, ibu menyusui, hingga remaja yang baru mulai merawat diri.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- VISI MISI --}}
        <section class="py-5" id="visi-misi" style="background-color: #E8F5E9;">
            <div class="container">
                <h2 class="fw-bold text-center mb-4" style="color: #388E3C;">Visi & Misi</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-bold" style="color: #388E3C;">Visi</h4>
                        <p style="color: #424242;">Menjadi brand skincare terpercaya di Indonesia yang membawa
                            kecantikan alami dan
                            keberkahan dalam setiap produknya.</p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-bold" style="color: #388E3C;">Misi</h4>
                        <ul style="color: #424242;">
                            <li>Menghadirkan produk skincare halal, aman, dan efektif.</li>
                            <li>Mengedukasi masyarakat tentang perawatan kulit sehat.</li>
                            <li>Mendukung wanita Indonesia tampil percaya diri.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       {{-- MENGAPA PILIH BNR SKINCARE --}}
        <section class="py-5" id="mengapa-pilih">
            <div class="container">
                <h2 class="fw-bold text-center mb-4" style="color: #212121;">Mengapa Pilih BnR Skincare?</h2>
                <p class="text-center" style="color: #666;">Komitmen kami untuk memberikan produk terbaik dengan nilai-nilai Islami</p>
                <div class="row mt-4">
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-shield-check" style="font-size: 2rem; color: #28a745;"></i>
                            <h5 style="color: #212121;">Halal & Aman</h5>
                            <p style="color: #424242;">Tersertifikasi halal dengan bahan-bahan alami pilihan</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-award-fill" style="font-size: 2rem; color: #ffc107;"></i>
                            <h5 style="color: #212121;">BPOM Certified</h5>
                            <p style="color: #424242;">Tanda terjamin keamanan dan kualitas</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-people-fill" style="font-size: 2rem; color: #17a2b8;"></i>
                            <h5 style="color: #212121;">Semua Usia</h5>
                            <p style="color: #424242;">Cocok untuk semua jenis kulit dan rentang usia</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-heart-fill" style="font-size: 2rem; color: #dc3545;"></i>
                            <h5 style="color: #212121;">Berkah</h5>
                            <p style="color: #424242;">Bukan sekadar cantik, tapi juga mendatangkan berkah</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PRODUK --}}
        <section class="py-5" id="produk">
            <div class="container">
                <h2 class="fw-bold text-center mb-4" style="color: #212121;">Produk Unggulan</h2>
                <div class="row g-4">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3"
                            alt="Serum Pencerah">
                        <h5 style="color: #212121;">Serum Pencerah</h5>
                        <p style="color: #424242;">Mencerahkan kulit kusam dan meratakan warna kulit.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Moisturizer">
                        <h5 style="color: #212121;">Moisturizer</h5>
                        <p style="color: #424242;">Melembapkan kulit tanpa membuatnya berminyak.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Sunscreen">
                        <h5 style="color: #212121;">Sunscreen SPF 50</h5>
                        <p style="color: #424242;">Perlindungan maksimal dari sinar UVA & UVB.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3"
                            alt="Serum Pencerah">
                        <h5 style="color: #212121;">Serum Pencerah</h5>
                        <p style="color: #424242;">Mencerahkan kulit kusam dan meratakan warna kulit.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Moisturizer">
                        <h5 style="color: #212121;">Moisturizer</h5>
                        <p style="color: #424242;">Melembapkan kulit tanpa membuatnya berminyak.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Sunscreen">
                        <h5 style="color: #212121;">Sunscreen SPF 50</h5>
                        <p style="color: #424242;">Perlindungan maksimal dari sinar UVA & UVB.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- KLIEN --}}
        <section class="py-5" style="background-color: #E8F5E9;" id="klien">
            <div class="container">
                <h2 class="fw-bold text-center mb-4" style="color: #212121;">Klien Kami</h2>
                <p class="text-center" style="color: #666;">Komitmen kami untuk memberikan hasil konsultasi terbaik cantik alami dan sehat</p>
                <div class="row mt-4">
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-hospital" style="font-size: 2rem; color: #28a745;"></i>
                            <h5 style="color: #212121;">Klinik Wajah</h5>
                            <p style="color: #424242;">Layanan perawatan wajah profesional dan terpercaya</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-heart-pulse" style="font-size: 2rem; color: #ffc107;"></i>
                            <h5 style="color: #212121;">Klinik Kesehatan Kulit</h5>
                            <p style="color: #424242;">Solusi kesehatan kulit yang aman dan efektif</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-dragon" style="font-size: 2rem; color: #17a2b8;"></i>
                            <h5 style="color: #212121;">2 Naga</h5>
                            <p style="color: #424242;">Kemitraan unggulan untuk perawatan kulit</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3">
                            <i class="bi bi-droplet-fill" style="font-size: 2rem; color: #dc3545;"></i>
                            <h5 style="color: #212121;">Naga Biru</h5>
                            <p style="color: #424242;">Innovasi perawatan kulit dengan standar tinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <section class="py-5" style="width: 100%; padding-top: 76px; background-color: #f7fff7; color: #212121;">
        <div class="container" id="kontak">
            <h2 class="text-center mb-4" style="color: #212121;">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled" style="color: #212121;">
                        <li><strong>Alamat:</strong> Jl. Cangkringan No.Km 1,5, Somo Daran, Tirtomartani, Kec. Kalasan,
                            Kabupaten Sleman, D.I
                            Yogyakarta 55571</li>
                        <li class="mb-2">
                            <a href="https://instagram.com/BnR_Skincare" target="_blank"
                                class="text-decoration-none">📸
                                Instagram</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://wa.me/089672663777" target="_blank" class="text-decoration-none">💬
                                WhatsApp</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://maps.google.com/maps?q=Tirtomartani,Kec. Kalasan,&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- SCRIPTS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

</body>

</html>