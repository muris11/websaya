@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Mahasiswa : {{ $mhs }}</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table border="1" class="table">
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">Angkatan</th>
        </tr>
        @foreach($dataMahasiswa as $item)
        <tr>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->prodi }}</td>
            <td>{{ $item->angkatan }}</td>
            <td>
                <!-- Tombol Edit -->
                <a href="{{ route('mahasiswa.edit', $item->nim) }}" class="btn btn-warning btn-sm">Edit</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('mahasiswa.destroy', $item->nim) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
