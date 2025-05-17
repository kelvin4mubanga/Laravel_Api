<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E-learningApi extends Model
{
    //
     use HasFactory;

    protected $table = 'e-learning';
    protected $fillable = [
        'course',
        'description',
        'duration',
        'amount'
        ];
}
