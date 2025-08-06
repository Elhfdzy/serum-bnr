<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Konsultasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
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

<!-- Sidebar -->
<aside class="bg-light vh-100 border-end shadow-sm" style="width: 240px; position: fixed; top: 0; left: 0; margin-top: 76px; z-index: 1000;">
  <div class="d-flex flex-column p-3">
    <h5 class="text-center mb-4 fw-bold text-primary">Dashboard</h5>

    <a href="/l-konsultasi" class="btn btn-outline-primary mb-2 text-start">📋 List Konsultasi</a>
    <a href="/l-proposal" class="btn btn-outline-warning mb-2 text-start">📁 List Proposal</a>
  </div>
</aside>

<!-- Main Content -->
<main style="margin-left: 240px; padding-top: 100px;" class="container">
  <h2 class="text-success fw-bold mb-4">List Konsultasi</h2>

  @foreach($konsultasi as $item)
  <div class="card shadow-sm mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $item->user->name }}</h5>
      <p class="card-text">
        Tanggal: {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}<br>
        Umur: {{ $item->umur }} tahun <br>
        Jenis Kulit: {{ $item->jenis_kulit }}
      </p>
    </div>
  </div>
  @endforeach

  @if($konsultasi->isEmpty())
  <div class="alert alert-info">
    Belum ada data konsultasi.
  </div>
  @endif
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
