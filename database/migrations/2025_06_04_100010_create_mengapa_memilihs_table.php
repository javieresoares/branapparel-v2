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
        Schema::create('mengapa_memilihs', function (Blueprint $table) {
            $table->id();
            $table->string('ikon_mengapamemilih');
            $table->string('judul_mengapamemilih');
            $table->string('teks_mengapamemilih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mengapa_memilihs');
    }
};