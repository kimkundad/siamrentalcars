<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cat_id');
            $table->integer('sub_cat_id');
            $table->integer('price');
            $table->integer('deposit')->default('0');
            $table->string('grear')->nullable();
            $table->string('code')->nullable();
            $table->integer('size')->default('0');
            $table->string('image')->nullable();
            $table->integer('total_p')->default('0');
            $table->string('insurance')->nullable();
            $table->integer('bags')->default('0');
            $table->integer('branch')->default('0');
            $table->text('detail')->nullable();
            $table->text('service')->nullable();
            $table->integer('status')->default('0');
            $table->integer('views')->default('0');
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
        Schema::dropIfExists('cars');
    }
}
