<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\mhs;
use App\Models\Prodi;

class PageController extends Controller
{
    public function index()
    {
        $slug = 'home'; // Menentukan slug untuk halaman home
        return view('home', compact('slug')); // Menampilkan view home
    }

    public function profil()
    {
        // Contoh data statis untuk halaman profil
        $profil = [
            'nama' => 'Muhammad Rifqy Saputra',
            'nim' => '2307046',
            'prodi' => 'Sistem Informasi Kota Cerdas',
            'email' => 'rifqysaputra11@student.polindra.ac.id',
        ];

        $slug = 'profil'; // Menentukan slug untuk halaman profil
        return view('profil', compact('profil', 'slug')); // Menampilkan view profil
    }

    public function mahasiswa()
    {
        // Ambil semua data mahasiswa
        $mahasiswas = mhs::all();
        $slug = 'mahasiswa'; // Menentukan slug untuk halaman mahasiswa
        return view('mahasiswa', compact('mahasiswas', 'slug')); // Menampilkan view mahasiswa
    }

    public function prodi()
    {
        // Ambil semua data program studi
        $prodis = Prodi::all();
        $slug = 'prodi'; // Menentukan slug untuk halaman prodi
        return view('prodi', compact('prodis', 'slug')); // Menampilkan view prodi
    }
}
