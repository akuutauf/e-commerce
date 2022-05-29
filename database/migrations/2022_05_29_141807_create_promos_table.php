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
            
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->string('nama_promo', 100);
            $table->string('deskripsi_promo', 255);
            $table->string('image_promo', 100);
            $table->string('data_promo', 250);
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('products')->restrict;
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
