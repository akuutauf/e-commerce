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
        Schema::create('products', function (Blueprint $table) {
            $table->string('kode_produk', 10)->primary();
            $table->string('kode_toko', 10);
            $table->string('image_produk', 50);
            $table->string('nama_produk', 50);
            $table->string('kategori_produk', 50);
            $table->string('deskripsi_produk', 255);
            $table->string('varian_produk', 50);
            $table->double('harga_produk');
            $table->double('stok_produk');
            $table->string('berat_produk', 15);
            $table->timestamps();
            $table->foreign('kode_toko')->references('kode_toko')->on('tokos')->restrict;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
