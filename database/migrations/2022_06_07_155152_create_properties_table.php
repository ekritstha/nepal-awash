<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('city');
            $table->string('location');
            $table->integer('price')->nullable();
            $table->integer('lot_area')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('parking_space')->nullable();
            $table->integer('year')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('rent_sale', ['Rent', 'Sale'])->nullable();
            $table->enum('house_land', ['House', 'Land', 'Apartment', 'Office'])->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('slider')->default(0);
            $table->integer('sort')->default(1);
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
        Schema::dropIfExists('properties');
    }
}
