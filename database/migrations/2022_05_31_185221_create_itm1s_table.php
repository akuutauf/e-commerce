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
        Schema::create('itm1s', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->unsigned()->incrementing();
            $table->string('Itemcode');
            $table->string('Itemname', 64);
            $table->string('MPName', 32);
            $table->string('MP_ProductName', 128);
            $table->string('MP_ProductCategory', 128);
            $table->string('Etalase', 128);
            $table->string('MPKondisi', 5);
            $table->string('MP_ProductDescription', 2000);
            $table->string('UrlVideoProduct', 512);
            $table->integer('MP_MinOrder');
            $table->decimal('MP_UnitPrice');
            $table->decimal('MP_GroceryPrice');
            $table->boolean('MPStatusProduct');
            $table->integer('MPStockProduct');
            $table->string('MPSKU', 32);
            $table->decimal('MPProductWeight');
            $table->decimal('MP_ProductLength');
            $table->decimal('MP_ProductWidth');
            $table->decimal('MP_ProductHeight');
            $table->boolean('MP_ProdInsurance');
            $table->string('MP_Delivery', 12);
            $table->boolean('MP_POProduct');
            $table->string('MP_Pic1', 64);
            $table->string('MP_Pic2', 64);
            $table->string('MP_Pic3', 64);
            $table->string('MP_Pic4', 64);
            $table->string('MP_Pic5', 64);
            $table->string('PromoSupport', 256);
            $table->string('MPProductLink', 512);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itm1s');
    }
};
