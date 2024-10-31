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
        Schema::create('favorites', function (Blueprint $table) {
            $table->unsignedInteger('idkategori');
            $table->unsignedInteger('idpengguna');
            $table->string('nama');
            $table->string('price');
            $table->timestamps();

            $table->foreign('idkategori')->references('idkategori')->on('kategori_obats')->onDelete('cascade');
            $table->foreign('idpengguna')->references('idpengguna')->on('penggunas')->onDelete('cascade');

            // Definisikan kombinasi unik jika diperlukan
            $table->unique(['idkategori', 'idpengguna', 'nama']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
