<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DB::table('mhs')
        ->insert([
            'nim' => 2307032,
            'nama' => 'Anto',
            'prodi' => 'D3TI',
            'angkatan' => 2022
        ]);
        echo "Data mhs berhasil ditambahkan";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id="")
    {
        $id = array(
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
