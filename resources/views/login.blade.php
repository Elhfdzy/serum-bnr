<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - BnR Skincare</title>
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
            <div class="col-md-5">
                <h3 class="text-center mb-4 text-success">Login</h3>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button class="btn w-100" style="background-color: #ffc107; color:black;">Login</button>
                </form>

                <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
