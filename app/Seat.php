<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
