<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard App</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="text-center p-5 shadow bg-white rounded" style="max-width: 600px;">
        <h1 class="display-4 fw-bold text-primary mb-3">Selamat Datang!</h1>
        <p class="lead text-muted mb-4">Aplikasi Simple Dashboard Mahasiswa dengan fitur autentikasi terintegrasi.</p>
        
        @if (Route::has('login'))
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg px-4 gap-3">Ke Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg px-4 gap-3">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>