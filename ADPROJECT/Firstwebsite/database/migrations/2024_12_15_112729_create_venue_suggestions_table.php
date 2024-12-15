<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_venue_suggestions_table.php
public function up()
{
    Schema::create('venue_suggestions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('venue_id')->constrained()->onDelete('cascade');
        $table->foreignId('subject_id')->constrained()->onDelete('cascade');
        $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending'); // Status of the suggestion
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('venue_suggestions');
}

};
