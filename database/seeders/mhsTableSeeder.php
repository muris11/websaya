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
            ['nim' => '2307046',
            'nama' => 'Rifqy',
            'prodi' => 'D4SIKC',
            'angkatan' => '2024'],
            ['nim' => '2307036',
            'nama' => 'Deco',
            'prodi' => 'D4SIKC',
            'angkatan' => '2024']
        ));
    }
}
