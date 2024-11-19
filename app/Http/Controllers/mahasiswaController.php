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
        return view('resmhs.index',
        compact('mhs','title','slug','dataMhs'));
        }

        public function destroy()
            {
            DB::table('mhs')
            ->where('nim',2307032)
            ->delete();
            echo "Data mhs 2307032 berhasil di hapus";
        }
}

