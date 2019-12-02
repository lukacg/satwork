<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('device_news', function (Blueprint $table) {
            $table->number('x', 10);
            $table->number('y', 10);
            $table->time('time');
            $table->bigInteger('deviceId');
            $table->timestamps();

            $table->foreign('deviceId')->references('id')->on('devices');
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_news');
    }
}
