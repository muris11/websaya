<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class prodiController extends Controller
{
    public function index(){
        $slug = 'Progam Studi WebSaya.Com';
        $title = "Prodi Mahasiswa";
        $mhs = "Rifqy";
        $dataProdi = prodi::all();
        return view('konten.prodi', 
        compact('mhs', 'title', 'slug', 'dataProdi'));
        
    }

    public function create(){
     //Eloquent ORM biasa
     $dataProdi = new prodi();
     $dataProdi->kode_prodi = 'D4 SIKC';
     $dataProdi->nama_prodi = 'Sistem Informasi Kota Cerdas';
     $dataProdi->created_at = now();
     $dataProdi->updated_at = now();
     $dataProdi->save();

     //Eloquent ORM Mass Aassignment
     prodi::insert(array(
        ['kode_prodi'=>'D4RPL',
        'nama_prodi'=>'Rekayasa Perangkat Lunak',
        'created_at'=>now(),
        'updated_at'=>now()
        ],
        ['kode_prodi'=>'D3TI',
        'nama_prodi'=>'Teknik Informatika',
        'created_at'=>now(),
        'updated_at'=>now()
        ],
     ));
     echo "Data Prodi Berhasil Disimpan,
     <a href='/prodi'>Kembali</a>";
    }

    public function update(){
        prodi::where('kode_prodi', '=', 'D3TI')->update([
            'nama_prodi' => 'Teknik Informatikaaaaaa'
        ]);
        echo "Data prodi D3TI Berhasil di perbarui,
        <a href='/prodi'>Kembali</a>";
    }

    public function destroy()
            {
                prodi::where('kode_prodi','D3TI')->delete();
                return Redirect('/prodi');
            }
}
