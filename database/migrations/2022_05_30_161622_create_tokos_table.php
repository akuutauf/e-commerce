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
        Schema::create('tokos', function (Blueprint $table) {
            $table->string('kode_toko', 10)->primary();
            $table->integer('id_user');
            $table->string('nama_toko', 50);
            $table->string('lokasi_toko', 100);
            $table->string('hari_opsional_toko', 50);
            $table->string('jam_opsional_toko', 50);
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
        Schema::dropIfExists('tokos');
    }
};
