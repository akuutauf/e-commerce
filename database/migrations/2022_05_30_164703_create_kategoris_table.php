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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->string('kode_kategori', 10)->primary();
            $table->string('kode_product', 10);
            $table->string('nama_kategori', 50);
            $table->timestamps();
            $table->foreign('kode_product')->references('kode_produk')->on('products')->restrict();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
};
