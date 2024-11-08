<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(
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
        ));
    }
}
