@extends('layouts.main')
@php $slug = 'mahasiswa'; @endphp
@section('title', 'Data Mahasiswa')

@section('content')
    <h2>Data Mahasiswa</h2>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        @foreach($mahasiswa as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['prodi'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
