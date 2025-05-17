<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartAgricultureApi extends Model
{
    //
    use HasFactory;

    protected $table = 'smart_agriculture';
    protected $fillable = [
    'user_id',
    'co-operative_name',
    'location',
    'land_size',
    'type_of_farming',
    'main_crop',
    'last_harvest',
    'finacial_record',
    'colateral',
    
    ];
}
