<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('venue_id')->unsigned();
            $table->foreign('venue_id')->on('venues')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('price_id')->unsigned();
            $table->foreign('price_id')->on('venue_prices')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->double('price', 8, 2);
            $table->date('date');
            $table->double('paid_amount', 8, 2)->default(0);
            $table->enum('status', ["pending", "approved", "declined"])->default("pending");
            commonDbFields($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venue_bookings');
    }
}
