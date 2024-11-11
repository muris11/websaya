@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Nama : {{ $mhs }}</h2>
    <table border="1" class="table">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
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
