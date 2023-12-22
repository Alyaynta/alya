<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('mahasiswas')->insert([
        'npm' => "101010",
        'nama' => 'Mahasiswa10',
        'alamat' => 'Padang',
        'no_hp' => '08122222',
    ]);
        //
    }
}
