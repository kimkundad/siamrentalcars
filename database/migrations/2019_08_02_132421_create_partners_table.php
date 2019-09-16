<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('part_name')->nullable();
            $table->string('part_image')->nullable();
            $table->string('part_owner')->nullable();
            $table->string('part_email')->nullable();
            $table->string('part_phone')->nullable();
            $table->text('part_address')->nullable();
            $table->text('part_detail')->nullable();
            $table->integer('part_short')->default('0');
            $table->integer('part_status')->default('0');
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
        Schema::dropIfExists('partners');
    }
}
