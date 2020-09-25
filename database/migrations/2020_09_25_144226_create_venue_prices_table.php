<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_prices', function (Blueprint $table) {
            $table->id();
            $table->string('category_type');
            $table->double('price',8,2);
            $table->enum('status', ["active", "inactive"])->default("active");
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
        Schema::dropIfExists('venue_prices');
    }
}
