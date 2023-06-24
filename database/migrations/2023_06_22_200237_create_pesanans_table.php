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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->string('nama_acara');
            $table->date('tgl_pemesanan');
            $table->date('waktu_acara');
            $table->string('alamat');
            $table->string('catatan');
            
            
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_seller');
            $table->foreign('id_seller')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('cascade'); 
            $table->unsignedBigInteger('kode_pembayaran');
            $table->foreign('kode_pembayaran')->references('kode_pembayaran')->on('pembayarans')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
