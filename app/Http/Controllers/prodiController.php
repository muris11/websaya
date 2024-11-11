<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index()
    {
        $slug = 'Profil';
        $title = "Prodi Polindra";
        $prodi = [
        ['kode_prodi' => 'D3TI',
        'nama_prodi' => 'Teknik Informatika'],
        ['kode_prodi' => 'D3TM',
        'nama_prodi' => 'Teknik Mesin'],
        ['kode_prodi' => 'D3TPTU',
        'nama_prodi' => 'Teknik Pendingin dan Tata Udara'],
        ['kode_prodi' => 'D3KP',
        'nama_prodi' => 'Keperawatan'],
        ['kode_prodi' => 'D4SIKC',
        'nama_prodi' => 'Sistem Informasi Kota Cerdas'],
        ['kode_prodi' => 'D4RPL',
        'nama_prodi' => 'Rekayasa Perangkat Lunak'],
        ['kode_prodi' => 'D4TRIK',
        'nama_prodi' => 'eknologi Rekayasa Instrumentasi dan Kontrol'],
        ['kode_prodi' => 'D4PM',
        'nama_prodi' => 'Perancangan Manufaktur']
                ];
        return view('konten.prodi', compact('slug', 'prodi', 'title'));
    }
}
