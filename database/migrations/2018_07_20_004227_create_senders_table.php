<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('originCity')->nullable();
            $table->string('originPostal')->nullable();
            $table->string('destinationCity')->nullable();
            $table->string('destinationPostal')->nullable();
            $table->date('earliestDeliveryDate');
            $table->date('latestDeliveryDate');
            $table->string('deliveryType');
            $table->string('itemValue');
            $table->string('itemDescription');
            $table->string('cargoSpace');
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('bestContactMethod');
            $table->string('tos');
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
        Schema::dropIfExists('senders');
    }
}
