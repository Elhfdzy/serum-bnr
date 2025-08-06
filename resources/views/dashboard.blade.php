<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BnR Skincare')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28a745; position: fixed; top: 0; width: 100%; z-index: 1001;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('asset/logo.png') }}" alt="Logo" height="40" class="me-2">
                <strong>BnR Skincare</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="lainnyaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artikel</a>
                        <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                            <li><a class="dropdown-item" href="/konsultasi">Konsultasi</a></li>
                            <li><a class="dropdown-item" href="/sponsor">Ajukan Sponsor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- WRAPPER --}}
    <div class="d-flex">

        {{-- SIDEBAR --}}
        <aside class="bg-light vh-100 border-end shadow-sm" style="width: 240px; position: fixed; top: 0; left: 0; z-index: 1000;">
            <div class="d-flex flex-column p-3" style="margin-top: 76px;">
                <h5 class="text-center mb-4 fw-bold text-primary">Dashboard</h5>
                
                <a href="/l-konsultasi" class="btn btn-outline-primary mb-3 text-start">
                    📋 List Konsultasi
                </a>
                
                <a href="/l-sponsor" class="btn btn-outline-success mb-3 text-start">
                    📁 List Sponsor
                </a>
            </div>
        </aside>
        

        {{-- MAIN CONTENT --}}
        <main style="margin-left: 240px; width: calc(100% - 240px); min-height: 100vh; padding-top: 76px;">
            {{-- HERO --}}
            <section class="py-5 text-center" style="background-color: #e9fce8;">
                <div class="container">
                    <h1 class="fw-bold" style="color: #28a745;">Cantik, Sehat, dan Penuh Berkah</h1>
                    <p class="lead">Perawatan kulit aman, halal, dan alami untuk semua kalangan.</p>
                    <a href="#produk" class="btn btn-lg" style="background-color:#ffc107; color:black;">Lihat Produk</a>
                </div>
            </section>

            {{-- TENTANG KAMI --}}
            <section class="py-5" id="tentang">
                <div class="container">
                    <h2 class="fw-bold text-center mb-4" style="color:#28a745;">Tentang Kami</h2>
                    <p class="text-center">
                        BNR Skincare adalah brand perawatan kulit berkualitas tinggi yang menggabungkan bahan alami dan
                        teknologi ilmiah untuk membantu wanita Indonesia mendapatkan kulit sehat, cerah, dan terawat.
                        Kami fokus menyediakan produk yang aman, halal, dan efektif untuk semua usia, termasuk remaja,
                        hijabers, ibu hamil, dan menyusui.
                    </p>
                </div>
            </section>

            {{-- VISI MISI --}}
            <section class="py-5" id="visi-misi" style="background-color: #e9fce8;">
                <div class="container">
                    <h2 class="fw-bold text-center mb-4" style="color:#28a745;">Visi & Misi</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="fw-bold" style="color: #28a745;">Visi</h4>
                            <p>Menjadi brand skincare terpercaya di Indonesia yang membawa kecantikan alami dan keberkahan dalam setiap produknya.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-bold" style="color: #28a745;">Misi</h4>
                            <ul>
                                <li>Menghadirkan produk skincare halal, aman, dan efektif.</li>
                                <li>Mengedukasi masyarakat tentang perawatan kulit sehat.</li>
                                <li>Mendukung wanita Indonesia tampil percaya diri.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- PRODUK --}}
            <section class="py-5" id="produk">
                <div class="container">
                    <h2 class="fw-bold text-center mb-4" style="color:#28a745;">Produk Unggulan</h2>
                    <div class="row g-4">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Serum Pencerah">
                            <h5>Serum Pencerah</h5>
                            <p>Mencerahkan kulit kusam dan meratakan warna kulit.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Moisturizer">
                            <h5>Moisturizer</h5>
                            <p>Melembapkan kulit tanpa membuatnya berminyak.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Sunscreen">
                            <h5>Sunscreen SPF 50</h5>
                            <p>Perlindungan maksimal dari sinar UVA & UVB.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Serum Pencerah">
                            <h5>Serum Pencerah</h5>
                            <p>Mencerahkan kulit kusam dan meratakan warna kulit.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Moisturizer">
                            <h5>Moisturizer</h5>
                            <p>Melembapkan kulit tanpa membuatnya berminyak.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Sunscreen">
                            <h5>Sunscreen SPF 50</h5>
                            <p>Perlindungan maksimal dari sinar UVA & UVB.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Serum Pencerah">
                            <h5>Serum Pencerah</h5>
                            <p>Mencerahkan kulit kusam dan meratakan warna kulit.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Moisturizer">
                            <h5>Moisturizer</h5>
                            <p>Melembapkan kulit tanpa membuatnya berminyak.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('asset/produk.jpeg') }}" class="img-fluid rounded mb-3" alt="Sunscreen">
                            <h5>Sunscreen SPF 50</h5>
                            <p>Perlindungan maksimal dari sinar UVA & UVB.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- KLIEN --}}
            <section class="py-5" style="background-color: #e9fce8;">
                <div class="container">
                    <h2 class="fw-bold text-center mb-4" style="color:#28a745;">Klien Kami</h2>
                    <div class="row text-center g-4">
                        <div class="col-md-3"><img src="https://via.placeholder.com/150x80?text=Client+1" class="img-fluid" alt=""></div>
                        <div class="col-md-3"><img src="https://via.placeholder.com/150x80?text=Client+2" class="img-fluid" alt=""></div>
                        <div class="col-md-3"><img src="https://via.placeholder.com/150x80?text=Client+3" class="img-fluid" alt=""></div>
                        <div class="col-md-3"><img src="https://via.placeholder.com/150x80?text=Client+4" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    {{-- FOOTER --}}
    <section class="py-5" style="margin-left: 240px; width: calc(100% - 240px); padding-top: 76px; background-color: #20c997; color:white;">
        <div class="container" id="kontak">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><strong>Alamat:</strong> Jl. Contoh No. 123, Desa/Kelurahan</li>
                        <li><strong>Telp/WA:</strong> 0812-XXXX-XXXX</li>
                        <li><strong>Email:</strong> karangtaruna@contoh.id</li>
                        <li><strong>Instagram:</strong> @karangtaruna</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <iframe src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
