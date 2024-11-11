<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index(){
        $slug = 'Profil';
        $title = "Profil Mahasiswa";
        $mhs = [
            'nama' => 'Muhammad Rifqy Saputra',
            'nim' => '2307046',
            'jurusan' => 'Sistem Informasi Kota Cerdas',
            'semester' => 3
        ];
        

        return view('konten.profil', compact('slug', 'mhs', 'title'));
    }
}
