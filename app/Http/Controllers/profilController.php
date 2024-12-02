<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profilController extends Controller
{
    public function index(){
        $slug = 'Profil';
        $title = "Profil Mahasiswa";
        $dataProfil = DB::table('profil')->get();
        return view('konten.profil', 
        compact('title', 'slug', 'dataProfil'));
        
    }

    public function create(){
        DB::table('profil')
                ->insert([
                    'nim' => 2307046,
                    'nama' => 'M. Rifqy Saputra',
                    'prodi' => 'Sistem Informasi Kota Cerdas',
                    'semester' => 3
                ]);
                echo "Data profil berhasil di tambahkan";
    }
    public function update(){
        DB::table('profil')
        ->where('nim' , 2307046)
        ->update([
            'nama' => 'Muhammad Rifqy Saputra',
            'prodi' => 'Sistem Informasi Kota Cerdas',
            'semester' => 3
        ]);
        echo "Data profil 2307046 Berhasil di perbarui";
    }
    public function destroy()
            {
            DB::table('profil')
            ->where('nim',2307046)
            ->delete();
            echo "Data profil 2307046 berhasil di hapus";
        }

}
