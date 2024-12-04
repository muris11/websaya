@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Tambah Mahasiswa</h1>
    
    <!-- Form Tambah Mahasiswa -->
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" name="nim" id="nim" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="prodi" class="form-label">Prodi:</label>
                <input type="text" name="prodi" id="prodi" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="angkatan" class="form-label">Angkatan:</label>
                <input type="text" name="angkatan" id="angkatan" class="form-control" required>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary btn-lg px-5">Simpan</button>

            <!-- Tombol Kembali -->
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary btn-lg px-5">Kembali</a>
        </div>
    </form>
</div>
<br>
@endsection
