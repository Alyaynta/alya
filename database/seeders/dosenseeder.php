<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dosenseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn' => "121212",
            'nama' => 'Dosen AA',
            'alamat' => 'Padang',
            'no_hp' => '0812121212',
        ]);
        //
    }
}
