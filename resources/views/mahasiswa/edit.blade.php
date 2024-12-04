@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Edit Mahasiswa</h1>
    
    <!-- Form Edit Mahasiswa -->
    <form action="{{ route('mahasiswa.update', $dataMahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" value="{{ $dataMahasiswa->nim }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $dataMahasiswa->nama }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" name="prodi" value="{{ $dataMahasiswa->prodi }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" name="angkatan" value="{{ $dataMahasiswa->angkatan }}" required>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-success btn-lg px-5">Simpan Perubahan</button>

            <!-- Tombol Kembali -->
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary btn-lg px-5">Kembali</a>
        </div>
    </form>
</div>
@endsection
