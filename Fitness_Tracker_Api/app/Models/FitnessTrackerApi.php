<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FitnessTrackerApi extends Model
{
    //
    use HasFactory;

    protected $table = 'fitness_tracker';
    protected $fillable = [
        'execise_type'
        ];
}
