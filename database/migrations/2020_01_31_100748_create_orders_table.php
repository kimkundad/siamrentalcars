<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default('0');
            $table->integer('pro_id');
            $table->integer('prov_id');
            $table->integer('part_id');
            $table->integer('day');
            $table->integer('total');
            $table->string('detail')->nullable();
            $table->string('remark')->nullable();
            $table->string('re_car')->nullable();
            $table->string('se_car')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->integer('status')->default('0');
            $table->integer('status_2')->default('0');
            $table->integer('branch')->default('0');
            $table->integer('active')->default('0');
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
        Schema::dropIfExists('orders');
    }
}
