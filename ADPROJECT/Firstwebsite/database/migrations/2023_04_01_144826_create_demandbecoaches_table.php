<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandbevenuees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venue_id');
            $table->string('name');
            $table->string('sport');
            $table->string('description');
            $table->string('email');
            $table->string('image');
            $table->string('location');
            $table->string('price');
            $table->string('yearsofexperience');
            $table->string('status')->default('pending');
            $table->foreign('venue_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('demandbevenuees');
    }
};
