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
        Schema::create('polis_aktifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_penerima')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tanggal_lahir')->unique()->nullable();
            $table->string('hubungan')->unique()->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('umur')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('email')->nullable();
            $table->string('foto_akte')->nullable();
            // $table->string('email')->unique();
            $table->string('jenis_asuransi')->nullable();
            $table->string('periode_pembayaran')->nullable();
            $table->string('jumlah_tanggungan')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polis_aktifs');
    }
};
