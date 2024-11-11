<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert(array(
            ['nim' => '2307081',
            'nama' => 'Rio',
            'prodi' => 'D4SIKC',
            'angkatan' => '2024'],
            ['nim' => '2307031',
            'nama' => 'Aliep',
            'prodi' => 'D4SIKC',
            'angkatan' => '2024'],
            ['nim' => '2307054',
            'nama' => 'Wira',
            'prodi' => 'D4SIKC',
            'angkatan' => '2024']
        ));
    }
}
