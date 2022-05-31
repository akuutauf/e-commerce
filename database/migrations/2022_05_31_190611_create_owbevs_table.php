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
        Schema::create('owbevs', function (Blueprint $table) {
            $table->bigIncrements('EventID')->unsigned()->incrementing();
            $table->string('EventCode', 8)->auto_generated();
            $table->string('EventName', 32);
            $table->string('EventDescription', 2000);
            $table->string('PromoSupport', 256);
            $table->boolean('IsActive');
            $table->datetime('EventCDate');
            $table->integer('EventCreatedBy');
            $table->string('EventMainPict');
            $table->datetime('EventUpdatedDate');
            $table->integer('EventCreateBy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owbevs');
    }
};
