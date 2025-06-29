<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placesinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placeName');
            $table->string('placeShortdes');
            $table->longText('placeDescription');
            $table->string('image');
            $table->string('categoryName');
            $table->decimal('placeRating')->nullable();
            $table->string('placeLocation');
            $table->string('placeMapURL')->nullable();
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
        Schema::dropIfExists('placesinfo');
    }
}
