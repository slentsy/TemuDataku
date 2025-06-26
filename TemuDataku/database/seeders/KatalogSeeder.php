<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Katalog; // Import the Katalog model

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        // Katalog Mentoring
        Katalog::create([
            'namaKatalog' => 'Mentoring 1 on 1',
            'deskripsi' => 'Mentoring 45 menit
            Tanya apapun permasalahan dalam bidang data science
            Rekaman sesi mentoring
            Garansi kepuasan
            Dapatkan akses ke praktik data science',
            'harga' => '49k', 
            'tersedia' => true, 
            'kategoriID' => 1 // Assuming this is the ID for the "Mentoring" category
        ]);

        Katalog::create([
            'namaKatalog' => 'Mentoring Group',
            'deskripsi' => 'Mentoring 90 menit
            Tanya apapun permasalahan dalam bidang data science
            Rekaman sesi mentoring
            Garansi kepuasan
            Dapatkan akses ke praktik data science',
            'harga' => '159k', 
            'tersedia' => true, 
            'kategoriID' => 1 // Assuming this is the ID for the "Mentoring" category
        ]);

        // Katalog Practice
        // katalog 1
        Katalog::create([
            'namaKatalog' => 'Data Analysis - Customer Analysis',
            'deskripsi' => 'Kamu akan belajar cara menganalisis pelanggan, mencari trend yang tersembunyi, dan bagaimana prospek pelanggan kedepannya.',
            'harga' => '15000', 
            'tersedia' => true, 
            'kategoriID' => 2 // Assuming this is the ID for the "Practice" category

        ]);

        // katalog 2
        Katalog::create([
            'namaKatalog' => 'Machine Learning - NLP',
            'deskripsi' => 'Kamu akan belajar bagaimana cara mengolah teks, menganalisis sentiment, dan juga klasifikasi teks seperti spam detection dan sejenisnya.',
            'harga' => '0', 
            'tersedia' => false,
            'kategoriID' => 2 // Assuming this is the ID for the "Practice"
        ]);

        // katalog 3
        Katalog::create([
            'namaKatalog' => 'Data Scientist - Churn Prediction',
            'deskripsi' => 'Kamu akan belajar mulai dari membersihkan data dan membuat model untuk memprediksi kemungkinan pelanggan melakukan churn.',
            'harga' => '0', 
            'tersedia' => false,
            'kategoriID' => 2 // Assuming this is the ID for the "Practice"
        ]);

        // katalog 4
        Katalog::create([
            'namaKatalog' => 'Machine Learning - Classification',
            'deskripsi' => 'Kamu akan belajar mulai dari pemrosesan data seperti feature enginering, encoding, dan labelling. Kamu juga akan menggunakan package untuk melakukan pemodelan klasifikasi.',
            'harga' => '15000', 
            'tersedia' => true, 
            'kategoriID' => 2 // Assuming this is the ID for the "Practice"
        ]);

        // katalog 5
        Katalog::create([
            'namaKatalog' => 'Machine Learning - Computer Vision',
            'deskripsi' => 'Kamu akan belajar bagaimana mengolah gaambar dan membuat klasifikasi dari dataset yang disedikanan.',
            'harga' => '0', 
            'tersedia' => false, 
            'kategoriID' => 2 // Assuming this is the ID for the "Practice" 
        ]);

        // katalog 6
        Katalog::create([
            'namaKatalog' => 'Machine Learning - Time Series',
            'deskripsi' => 'Kamu akan belajar pemrosesan data untuk tipe data time series serta pembuatan model model time series dari klasik hingga penggunaan neural network untuk time series.',
            'harga' => '0', 
            'tersedia' => false, 
            'kategoriID' => 2 // Assuming this is the ID for the "Practice"
        ]);

        // Katalog Bootcamp
        Katalog::create([
            'namaKatalog' => 'Bootcamp Data Analyst',
            'deskripsi' => 'Cocok untuk kamu yang tertarik analisis data',
            'harga' => '1.199k', 
            'tersedia' => true, 
            'kategoriID' => 3 // Assuming this is the ID for the "Practice"
        ]);

        Katalog::create([
            'namaKatalog' => 'Bootcamp Data Scientist',
            'deskripsi' => 'Cocok untuk kamu yang mau leveling up',
            'harga' => '1.199k', 
            'tersedia' => true, 
            'kategoriID' => 3 // Assuming this is the ID for the "Practice"
        ]);

        Katalog::create([
            'namaKatalog' => 'Bootcamp Data Science for Beginner',
            'deskripsi' => 'Cocok untuk kamu yang baru mulai',
            'harga' => '449k', 
            'tersedia' => true, 
            'kategoriID' => 3 // Assuming this is the ID for the "Practice"
        ]);
    }
}
