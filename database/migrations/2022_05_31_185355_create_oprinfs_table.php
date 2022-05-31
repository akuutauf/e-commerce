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
        Schema::create('oprinfs', function (Blueprint $table) {
            $table->bigIncrements('PrID')->unsigned()->incrementing();
            $table->string('PromoCode', 10);
            $table->string('PromoName', 32);
            $table->string('PromoDescription', 2000);
            $table->date('PromoSDate');
            $table->date('PromoEDate');
            $table->boolean('PromoIsActive');
            $table->integer('PrCreatedBy');
            $table->datetime('PrCreatedDate');
            $table->string('ImgUrlPromo1', 32);
            $table->string('ImgUrlPromo2', 32);
            $table->string('PromoSupport', 256);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oprinfs');
    }
};
