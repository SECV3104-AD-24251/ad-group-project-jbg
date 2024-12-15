<?php

// app/Models/VenueSuggestion.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VenueSuggestion extends Model
{
    protected $fillable = ['student_id', 'venue_id', 'subject_id', 'status'];

    // Relationship with Student
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Relationship with Venue
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    // Relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
