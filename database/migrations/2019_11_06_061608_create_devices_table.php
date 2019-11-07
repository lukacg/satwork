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
            $table->string('type', 20)->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('activation_date')->nullable();
            $table->date('deactivation_date')->nullable();
            $table->bigInteger('companyId')->unsigned();
            $table->timestamps();

            $table->foreign('companyId')->references('id')->on('companies');
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
