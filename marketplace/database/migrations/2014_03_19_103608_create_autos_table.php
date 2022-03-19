<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('brend');
            $table->string('model');
            $table->unsignedBigInteger('owner_id');
            $table->string('car_number', 9);
            $table->string('serial_pts');
            $table->unsignedInteger('nuber_pts');
            $table->string('vin');
            $table->unsignedFloat('power');
            $table->unsignedFloat('price');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
