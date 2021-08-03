<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('estate_type');
            $table->string('estate_city');
            $table->integer('estate_bedrooms');
            $table->integer('estate_bathrooms');
            $table->integer('estate_surface');
            $table->integer('estate_age');
            $table->string('estate_title');
            $table->string('estate_price');
            $table->string('estate_thumbnail');
            $table->text('estate_description');
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
        Schema::dropIfExists('listings');
    }
}
