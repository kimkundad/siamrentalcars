<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prov_id');
            $table->integer('partn_id');
            $table->integer('cars_id');
            $table->float('cars_price', 8, 2);
            $table->integer('position_car')->default('0');
            $table->integer('view_car')->default('0');
            $table->integer('total_car')->default('0');
            $table->integer('car_part_status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_parts');
    }
}
