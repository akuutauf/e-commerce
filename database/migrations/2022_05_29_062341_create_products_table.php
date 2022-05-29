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
            $table->id();
            $table->unsignedBigInteger('id_toko');
            $table->string('nama_product', 100);
            $table->double('harga_product',10);
            $table->string('kategori_product', 50);
            $table->double('stok_product',5)->default(0);
            $table->string('deskripsi_product', 255);
            $table->double('penjualan_product',5);
            $table->string('image_product', 255);
            $table->timestamps();
            $table->foreign('id_toko')->references('id')->on('toko')->restrict;
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
