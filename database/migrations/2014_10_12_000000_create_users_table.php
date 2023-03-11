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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id')->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('nis')->unique()->nullable();
            $table->bigInteger('nisn')->unique()->nullable();
            $table->longText('alamat')->nullable();
            $table->bigInteger('no_telp')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'petugas', 'siswa'])->default('siswa');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
