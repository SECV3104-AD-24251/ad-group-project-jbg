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
        Schema::create('venue_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('subject_id');
            $table->primary(['venue_id', 'subject_id']);

            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venue_subject');
    }
};