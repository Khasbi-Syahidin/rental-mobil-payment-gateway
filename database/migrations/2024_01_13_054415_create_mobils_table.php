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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('merk');
            $table->string('model');
            $table->string('nomor_plat');
            $table->string('tarif');
            $table->string('status')->default('ready');
            $table->date('tanggal_awal_ready');
            $table->date('tanggal_akhir_ready');
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
