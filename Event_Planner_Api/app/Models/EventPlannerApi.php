<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class EventPlannerApi extends Model
{
    //
     use HasFactory;

    protected $table = 'event_planner';
    protected $fillable = [
        'event',
        'description',
        'location',
        'start',
        'ending'
        ];
}
