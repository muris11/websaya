<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    public function index()
    {
        $title = "Mahasiswa WebRifqy.Com";
        $slug = "mahasiswa";
        $mhs = "Rifqy";
        $dataMhs = DB::table('mhs')
        ->join('prodi','mhs.prodi','=','prodi.kode_prodi')
        ->get();
        return view('konten.mahasiswa',
        compact('mhs','title','slug','dataMhs'));
        }

        public function create(){
            DB::table('mhs')
            ->insert([
                'nim' => 2307038,
                'nama' => 'Fajri',
                'prodi' => 'D4SIKC',
                'angkatan' => 2023
            ]);
            echo "Data Mahasiswa Berhasil Ditambahkan";
        }

        public function update(){
            DB::table('mhs')
            ->where('nim' , 2307038)
            ->update([
                'nama' => 'Fajri AG',
                'prodi' => 'D4SIKC',
                'angkatan' => 2023
            ]);
            echo "Data Mahasiswa 2307038 Berhasil di perbarui";
        }

        public function destroy()
            {
            DB::table('mhs')
            ->where('nim',2307038)
            ->delete();
            echo "Data Mahasiswa 2307038 berhasil di hapus";
        }

}

