<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_order');
            $table->string('reference', 9)->nullable();
            $table->unsignedInteger('id_customer');
            $table->unsignedInteger('id_address_delivery');
            $table->unsignedInteger('current_state');
            $table->decimal('total_paid', 20, 6)->default(0.000000);
            $table->dateTime('date_add');
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
