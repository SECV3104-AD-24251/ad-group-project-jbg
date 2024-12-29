<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandbevenue extends Model
{
    use HasFactory;

    protected $fillable = [

        "sport",
        "name",
        "email",
        "description",
        "image",
        "location",
        "price",
        "yearsofexperience",
        "venue_id",
        "status",


    ];

    public function user(){
        return $this->belongsTo(User::class, 'venue_id');
    }


}
