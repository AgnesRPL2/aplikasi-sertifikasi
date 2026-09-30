<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama_peserta');
            $table->string('jenis_kelamin');
            $table->string('nomor_telepon');
            // Relasi ke tabel skemas
            $table->foreignId('skema_id')->constrained('skemas')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('pesertas');
    }
};
