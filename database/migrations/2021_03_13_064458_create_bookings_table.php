<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('seating');
            $table->string('utype');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('bookingid');
            $table->foreignId('fid')->constrained('flights');
            $table->integer('amount');
            $table->foreignId('uid')->constrained('air_models');
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
        Schema::dropIfExists('bookings');
    }
}
