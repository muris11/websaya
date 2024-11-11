@extends('layouts.main')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <ul>
        <li>Nama: {{ $mhs['nama'] }}</li>
        <li>NIM: {{ $mhs['nim'] }}</li>
        <li>Jurusan: {{ $mhs['jurusan'] }}</li>
        <li>Semester: {{ $mhs['semester'] }}</li>
    </ul>
@endsection
