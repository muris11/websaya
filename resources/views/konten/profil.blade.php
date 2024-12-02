@extends('layouts.main')
@section('title', $title)
@section('content')
        @foreach($dataProfil as $item)
        <ul>
            <li>Nim : {{ $item->nim }}</li>
            <li>Nama : {{ $item->nama }}</li>
            <li>Prodi {{ $item->prodi }}</li>
            <li>Semester: {{ $item->semester }}</li>
        </ul>
        @endforeach
@endsection
