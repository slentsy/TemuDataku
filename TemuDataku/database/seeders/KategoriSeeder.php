<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori; // Import the Katalog model

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        // kategori 1
        Kategori::create([
            'namaKategori' => 'Mentoring',
        ]);

        // kategori 2
        Kategori::create([
            'namaKategori' => 'Practice',
        ]);

        // kategori 3
        Kategori::create([
            'namaKategori' => 'Bootcamp',
        ]);

    }
}
