<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['classroom_no','max_seat','major_id'];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    // public function seats()
    // {
    //     return $this->hasMany(Seat::class);
    // }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
}
