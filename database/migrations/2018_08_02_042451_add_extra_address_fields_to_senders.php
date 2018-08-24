<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraAddressFieldsToSenders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('senders', function (Blueprint $table) {
            $table->string('originStreetNumber')->nullable();
            $table->string('originStreetName')->nullable();
            $table->string('originProvince')->nullable();
            $table->string('destinationStreetNumber')->nullable();
            $table->string('destinationStreetName')->nullable();
            $table->string('destinationProvince')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senders', function (Blueprint $table) {
            //
        });
    }
}
