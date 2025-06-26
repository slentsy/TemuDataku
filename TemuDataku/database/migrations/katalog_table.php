<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id();
            $table->string('namaKatalog');
            $table->string('deskripsi')->unique();
            $table->string('harga');
            $table->boolean('tersedia')->default(true); // Indicates if the katalog is available

            // FK tabel kategoris
            $table->unsignedBigInteger('kategoriID');
            $table->foreign('kategoriID')->references('id')->on('kategoris')->onDelete('cascade');
            
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
