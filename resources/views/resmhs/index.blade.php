@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Resource Mahasiswa : {{ $mhs }}</h2>
    <table border="1" class="table">
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
        </tr>
        @foreach($dataMhs as $item)
        <tr>
            <td>{{ $item['nim'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['prodi'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
