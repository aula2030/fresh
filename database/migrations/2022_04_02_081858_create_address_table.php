<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id_address');
            $table->unsignedInteger('id_customer');
            $table->unsignedInteger('id_country');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address1', 128);
            $table->string('address2', 128);
            $table->string('city', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
