<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_name', 25)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->bigInteger('vehicleId')->unsigned();
            $table->timestamps();

            $table->foreign('vehicleId')->references('id')->on('vehicles');
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
        Schema::dropIfExists('drivers');
    }
}
