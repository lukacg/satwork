<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 10)->nullable();
            $table->string('model', 15)->nullable();
            $table->date('production_year')->nullable();
            $table->string('license_plate', 10)->nullable();
            $table->bigInteger('device_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('devices');
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
        Schema::dropIfExists('vehicles');
    }
}
