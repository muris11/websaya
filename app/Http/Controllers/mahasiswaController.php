<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index(){
    $mhs = "Rifqy";
    $title = "Mahasiswa WebRifqy.Com";
    $slug = "mahasiswa";
    $dataMhs = $this->dataMahasiswa();
    return view('konten.mahasiswa',compact('mhs','title','slug','dataMhs'));
    }
    public function dataMahasiswa(){
        $dataMhs = array(
            [
            'nim' => '2307046',
            'nama' => 'Rifqy',
            'prodi' => 'SIKC',
            ],
            [
                'nim' => '2307036',
                'nama' => 'Deco',
                'prodi' => 'SIKC',
            ],
            [
                'nim' => '2307059',
                'nama' => 'Anggi',
                'prodi' => 'SIKC',
            ],
        );
        return $dataMhs;
    }
}
