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
        Schema::create('subjektifs', function (Blueprint $table) {
            $table->id();
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->string('riwayat_keluarga');
            $table->string('riwayat_dulu');
            $table->integer('menikah_ke');
            $table->integer('usia_menikah');
            $table->integer('lama_menikah');
            $table->date('HPHT');
            $table->integer('menarche');
            $table->integer('lama_haid');
            $table->integer('siklus_haid');
            $table->string('warna');
            $table->string('konsisten');
            $table->string('flour_albus');
            $table->string('riwayat_kehamlan');
            $table->string('riwayat_kb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjektifs');
    }
};
