<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_listing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_path');
            $table->string('name', 50);
            $table->text('description');
            $table->string('owner')->nullable();
            $table->string('agent');
            $table->tinyinteger('status')->unsigned()->default(1);
            $table->integer('price')->unsigned();
            $table->integer('beds')->unsigned();
            $table->integer('bath')->unsigned();
            $table->string('property_type');
            $table->tinyInteger('featured')->unsigned()->default(0);
            $table->string('land_size');
            $table->string('location');
            $table->tinyInteger('state_of_property');
            $table->string('facts_and_features');
            $table->integer('likes');
            $table->integer('impressions');
            $table->integer('shares');
            $table->integer('saves');
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
        Schema::dropIfExists('property_listing');
    }
}
