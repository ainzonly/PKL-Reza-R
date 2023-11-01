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
        Schema::create('bangunans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('nama_bangunan',100);
            $table->bigInteger('kategori_id');
            $table->string('deskripsi');
            $table->string('gambar', 100);
            $table->integer('delstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangunans');
    }
};
