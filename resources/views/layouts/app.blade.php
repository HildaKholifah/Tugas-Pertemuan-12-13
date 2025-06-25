<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container py-4">
        {{-- Navigasi sederhana --}}
        <nav class="mb-4">
            <a href="{{ url('/kontaks') }}" class="btn btn-outline-primary">Kontak</a>
            <a href="{{ url('/mahasiswas') }}" class="btn btn-outline-success">Mahasiswa</a>
        </nav>

        {{-- Konten dinamis --}}
        @yield('content')
    </div>

    <!-- jQuery (wajib untuk AJAX) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    {{-- Script tambahan dari setiap halaman --}}
    @stack('scripts')
</body>
</html>
