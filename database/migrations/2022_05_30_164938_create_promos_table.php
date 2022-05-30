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
        Schema::create('promos', function (Blueprint $table) {
            $table->string('kode_promo', 10)->primary();
            $table->string('kode_produk', 10);
            $table->string('nama_promo', 100);
            $table->string('deskripsi_promo', 255);
            $table->string('image_promo', 100);
            $table->timestamps();
            $table->foreign('kode_produk')->references('kode_produk')->on('products')->restrict();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
};
