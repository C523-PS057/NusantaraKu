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
        Schema::create('masakans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('budaya_id');
            $table->foreignId('province_id');
            $table->string('masakan_name');
            $table->string('sejarah', 2000);
            $table->string('gambar');
            $table->string('deskripsi', 2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masakans');
    }
};
