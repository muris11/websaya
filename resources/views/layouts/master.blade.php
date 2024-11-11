<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">WebRifqy.Com</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ ($slug === 'home') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('profil') }}" class="nav-link {{ ($slug === 'profil') ? 'active' : '' }}">Profil</a></li>
                <li class="nav-item"><a href="{{ route('mahasiswa') }}" class="nav-link {{ ($slug === 'mahasiswa') ? 'active' : '' }}">Mahasiswa</a></li>
                <li class="nav-item"><a href="{{ route('prodi') }}" class="nav-link {{ ($slug === 'prodi') ? 'active' : '' }}">Prodi</a></li>
            </ul>
        </header>

        <!-- Konten yang berbeda di setiap halaman -->
        <main>
            @yield('content')
        </main>

        <footer class="pt-3 mt-4 text-muted border-top">
            Copyright 2024 - WebRifqy.com
        </footer>
    </div>
</body>
</html>
