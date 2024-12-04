<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    public function index()
    {
        $title = "Mahasiswa WebRifqy.Com";
        $slug = "mahasiswa";
        $mhs = "Rifqy";
        $dataMahasiswa = mahasiswa::all();
        return view('mahasiswa.index', 
        compact('mhs', 'title', 'slug', 'dataMahasiswa'));
    }

        public function create(){
        return view('mahasiswa.create');
        }

        public function store(Request $request) {
            mahasiswa::create($request->all()); // Simpan data baru
            return redirect()->route('mahasiswa.index');
        }


        public function edit($nim)
        {
            $dataMahasiswa = mahasiswa::findOrFail($nim);
            return view('mahasiswa.edit', compact('dataMahasiswa'));
        }
        
        public function update(Request $request, $nim) {
            $dataMahasiswa = mahasiswa::find($nim);
            $dataMahasiswa->update($request->all()); // Update data mahasiswa
            return redirect()->route('mahasiswa.index');
        }
        
        public function destroy($nim) {
            mahasiswa::destroy($nim); // Hapus data mahasiswa
            return redirect()->route('mahasiswa.index');
        }
        
}

