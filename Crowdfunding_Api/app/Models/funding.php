<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class funding extends Model
{
    //
     public $fillable = [
        'time',
        'description',
        'goal_amount',
        'raised_amount',
    ];

}
