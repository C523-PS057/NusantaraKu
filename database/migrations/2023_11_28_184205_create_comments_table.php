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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('budaya_id');
            $table->foreignId('masakan_id')->nullable();
            $table->foreignId('tari_id')->nullable();
            $table->foreignId('pakaian_id')->nullable();
            $table->foreignId('rumah_id')->nullable();
            $table->foreignId('musik_id')->nullable();
            $table->string('body_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
