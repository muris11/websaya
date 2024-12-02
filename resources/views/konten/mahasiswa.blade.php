@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Mahasiswa : {{ $mhs }}</h2>
    <table border="1" class="table">
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">Angkatan</th>
        </tr>
        @foreach($dataMhs as $item)
        <tr>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nama_prodi }}</td>
            <td>{{ $item->angkatan }}</td>
        </tr>
        @endforeach
    </table>
@endsection
