<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company')->nullable();
            $table->string('owner')->nullable();
            $table->string('number_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('num_car')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('regis_partners');
    }
}
