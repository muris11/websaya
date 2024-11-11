@extends('layouts.main')
@php $slug = 'prodi'; @endphp
@section('title', $title)

@section('content')
    <h2>Data Prodi</h2>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
        </tr>
        @foreach($prodi as $index => $p)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $p['kode_prodi'] }}</td>
            <td>{{ $p['nama_prodi'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
