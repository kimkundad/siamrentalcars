<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('promotion_name')->nullable();
            $table->text('promotion_detail')->nullable();
            $table->double('promotion_amount', 8, 2);
            $table->integer('promotion_limit')->default('0');
            $table->string('promotion_image')->nullable();
            $table->integer('promotion_type')->default('0');
            $table->integer('promotion_status')->default('0');
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
        Schema::dropIfExists('promotions');
    }
}
