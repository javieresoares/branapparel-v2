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
        Schema::create('c_t_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('judul_cta');
            $table->string('deskripsi_cta');
            // $table->string('whatsapp_cta');
            $table->string('gambar1_cta');
            $table->string('gambar2_cta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_t_a_s');
    }
};