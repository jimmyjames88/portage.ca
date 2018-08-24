<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('originCity')->nullable();
            $table->string('originPostal')->nullable();
            $table->string('destinationCity')->nullable();
            $table->string('destinationPostal')->nullable();
            $table->dateTime('departure');
            $table->string('outOfWay');
            $table->string('cargoSpace');
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('bestContactMethod');
            $table->string('validRegistrationInsurance');
            $table->string('licensed');
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
        Schema::dropIfExists('porters');
    }
}
