<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ajukan Proposal Sponsor</title>
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

    <div class="container py-5" style="margin-top: 40px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center text-success mb-4">Ajukan Proposal Sponsor</h3>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="instansi" name="instansi" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_event" class="form-label">Nama Event</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                    </div>

                    <div class="mb-3">
                        <label for="proposal" class="form-label">Upload Proposal (PDF / DOC)</label>
                        <input type="file" class="form-control" id="proposal" name="proposal"
                            accept=".pdf,.doc,.docx" required>
                    </div>

                    <button type="submit" class="btn w-100" style="background-color: #ffc107; color:black;">Kirim
                        Proposal</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
