<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaKatalog',
        'deskripsi',
        'harga',
        'tersedia' // Indicates if the katalog is available
    ];
    
}
