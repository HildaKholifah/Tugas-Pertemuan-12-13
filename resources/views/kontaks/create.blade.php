@extends('layouts.app')
{{-- memanggil isi konten layouts --}}

@section('title', 'Tambah Kontak Baru')
{{-- memangil yield title --}}

@section('content')
{{-- menaggil yield content --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Tambah Kontak Baru</h2>
            <form action="{{ route('kontaks.store') }}" method="POST">
                {{-- memanggil aksi route yang sudah dibuat di controller ‘Store’ --}}
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required>
                    {{-- atau pakai select jika mau tetap --}}
                    {{-- <select class="form-select" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Teman">Teman</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Kerja">Kerja</option>
                    </select> --}}
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
                {{-- href bisa langsung pangil route yang dibuat saja --}}
            </form>
        </div>
    </div>
</div>
@endsection