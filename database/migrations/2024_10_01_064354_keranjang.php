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
        Schema::create('keranjang', function (Blueprint $table) {
        $table->id();
        $table->integer('nama_barang');
        $table->integer('harga');
        $table->integer('jumlah_barang');
        $table->integer('subtotal');
        $table->integer('id_penjualan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop(table: 'keranjang');
    }
};
