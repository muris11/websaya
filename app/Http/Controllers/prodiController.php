<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prodiController extends Controller
{
    public function index(){
        $slug = 'Prodi';
        $title = "Prodi Mahasiswa";
        $dataProdi = DB::table('prodi')->get();
        return view('konten.prodi', 
        compact('title', 'slug', 'dataProdi'));
        
    }

    public function create(){
        DB::table('prodi')
                ->insert([
                    'kode_prodi' => 'D4IKM',
                    'nama_prodi' => 'Ilmu Komputer',
                ]);
                echo "Data prodi berhasil di tambahkan";
    }
    public function update(){
        DB::table('prodi')
        ->where('kode_prodi' , 'D4TRIK')
        ->update([
            'nama_prodi' => 'Teknologi Rekayasa Instrumentasi dan Kontrol',
        ]);
        echo "Data prodi D4TRIK Berhasil di perbarui";
    }
    public function destroy()
            {
            DB::table('prodi')
            ->where('kode_prodi' , 'D4IKM')
            ->delete();
            echo "Data prodi D4IKM berhasil di hapus";
        }
}
