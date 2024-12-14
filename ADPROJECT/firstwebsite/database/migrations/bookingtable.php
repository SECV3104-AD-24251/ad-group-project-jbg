<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the user
            $table->foreignId('venue_id')->constrained()->onDelete('cascade'); // Reference to the venue
            $table->date('booking_date'); // Date of the booking
            $table->string('event_name'); // Name of the event
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Booking status
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
