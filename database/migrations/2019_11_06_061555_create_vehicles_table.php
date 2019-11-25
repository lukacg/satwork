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
            $table->string('vehicle_type', 10)->nullable();
            $table->string('model', 15)->nullable();
            $table->year('production_year')->nullable();
            $table->string('license_plate', 10)->nullable();
            $table->bigInteger('deviceId')->unsigned()->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
