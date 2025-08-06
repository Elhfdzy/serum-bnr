<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Konsultasi Kulit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4fdf2;">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28a745;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('asset/logo.png') }}" alt="Logo" height="40" class="me-2">
                <strong>BnR Skincare</strong>
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center text-success mb-4">Form Konsultasi Kulit</h3>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('konsultasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" required min="10" max="100">
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kulit" class="form-label">Jenis Kulit</label>
                        <select name="jenis_kulit" class="form-select" required>
                            <option value="">-- Pilih Jenis Kulit --</option>
                            <option value="Normal">Normal</option>
                            <option value="Kering">Kering</option>
                            <option value="Berminyak">Berminyak</option>
                            <option value="Kombinasi">Kombinasi</option>
                            <option value="Sensitif">Sensitif</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Keluhan Kulit</label>
                        <textarea name="keluhan" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Upload Foto Wajah (Opsional)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn w-100" style="background-color:#ffc107; color:black;">Kirim Konsultasi</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
