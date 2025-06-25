<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');            // Kolom 1
            $table->string('nim')->unique();   // Kolom 2
            $table->string('prodi');           // Kolom 3
            $table->string('email');           // Kolom 4
            $table->string('no_hp');           // Kolom 5
            $table->string('dosen_wali');      // Kolom 6
            $table->string('kelas');           // Kolom 7
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
