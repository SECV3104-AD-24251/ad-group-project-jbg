<?php

// app/Http/Controllers/VenueController.php
namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\VenueSuggestion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Subject;

class VenueController extends Controller
{
    public function index()
    {
        $venues = Venue::where('lecturer_id', auth()->id())->get(); // Get venues managed by the logged-in lecturer
        return view('venues.index', compact('venues'));
    }

    public function updateStatus(VenueSuggestion $suggestion, Request $request)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $suggestion->update([
            'status' => $request->status,
        ]);

        return redirect()->route('venues.index')->with('success', 'Venue suggestion updated!');
    }

    public function create()
    {
        // Fetch the required data
        $students = User::where('userCategory', 'student')->get();
        $lecturers = User::where('userCategory', 'admin')->get();
        $subjects = Subject::all();
        $venues = Venue::all();
    
        // Pass the data to the view
        return view('venue_suggestion.create', compact('students', 'lecturers', 'subjects', 'venues'));
    }

    public function store(Request $request)
{
    $request->validate([
        // Validation rules for your venue fields
        'name' => 'required|string|max:255',
        'capacity' => 'required|integer',
        'subject_id' => 'required|integer',
        'lecturer_id' => 'required|integer',
        // Add more validation rules as needed
    ]);

    $venue = new Venue;
    $venue->name = $request->name;
    $venue->capacity = $request->capacity;
    $venue->subject_id = $request->subject_id;
    $venue->lecturer_id = $request->lecturer_id;
    $venue->save();

    return redirect()->route('venues.index')->with('success', 'Venue created successfully!');
}

public function show(Venue $venue)
{
    $venue = $venue->load('subjects');
    if (!$venue) {
        abort(404, 'Venue not found'); // Or redirect to an error page
    }
    return view('venues.show', compact('venue'));
}

}

