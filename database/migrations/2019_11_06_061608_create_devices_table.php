<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->date('purchase_date');
            $table->date('activation_date');
            $table->date('deactivation_date');
            $table->bigInteger('vehicle_id');
            $table->timestamps();

            $table->foreign('vehicle_id')->reference('id')->on('vehicles');
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
        Schema::dropIfExists('devices');
    }
}
