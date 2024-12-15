<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = ['name', 'capacity', 'subject_id', 'lecturer_id'];

    // Relationship with Subject
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    // Relationship with Lecturer
    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }

    // Relationship with Venue Suggestion (Student)
    public function suggestions()
    {
        return $this->hasMany(VenueSuggestion::class);
    }
}
