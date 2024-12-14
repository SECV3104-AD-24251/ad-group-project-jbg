<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller
{
    // Show all available venues
    public function index()
    {
        $venues = Venue::all(); // Fetch all venues
        return view('home', compact('venues'));
    }

    // Show a user's bookings
    public function showBookings()
    {
        $userBookings = Auth::user()->bookings; // Get bookings for the logged-in user
        return view('bookings', compact('userBookings'));
    }

    // Handle a venue booking
    public function bookVenue(Request $request, $venueId)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'booking_date' => 'required|date|after_or_equal:today', // Only future dates
        ]);

        // Create a new booking
        Booking::create([
            'user_id' => Auth::id(),
            'venue_id' => $venueId,
            'event_name' => $request->event_name,
            'booking_date' => $request->booking_date,
            'status' => 'pending', // Initially set status to 'pending'
        ]);

        return redirect()->route('home')->with('success', 'Booking placed successfully');
    }
}

