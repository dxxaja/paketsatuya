<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->uuid('PeminjamanID')->primary();
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreignUuid('BukuID');
            $table->foreign('BukuID')->references('BukuID')->on('buku');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalPengembalian');
            $table->string('StatusPeminjaman', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
