<?php

// app/Http/Controllers/VenueSuggestionController.php
namespace App\Http\Controllers;

use App\Models\VenueSuggestion;
use App\Models\Venue;
use App\Models\User;
use Illuminate\Http\Request;

class VenueSuggestionController extends Controller
{
    public function create()
    {
        $venues = Venue::all(); // Get all available venues
        $subjects = Subject::all(); // Get all subjects
        return view('venue_suggestions.create', compact('venues', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'venue_id' => 'required|exists:venues,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        VenueSuggestion::create([
            'student_id' => auth()->id(),
            'venue_id' => $request->venue_id,
            'subject_id' => $request->subject_id,
            'status' => 'pending',
        ]);

        return redirect()->route('venue_suggestions.create')->with('success', 'Venue suggestion submitted!');
    }
}


