@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <div class="profile-section">
        <h1>Profil Mahasiswa</h1>
        
        <h2>Nama:</h2>
        <p>{{ $nama }}</p>
        
        <h2>NIM:</h2>
        <p>{{ $nim }}</p>
        
        <h2>Program Studi:</h2>
        <p>{{ $prodi }}</p>
    </div>
@endsection
