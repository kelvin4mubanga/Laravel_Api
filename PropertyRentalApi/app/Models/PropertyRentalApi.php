<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRentalApi extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'propertyrentalapi';
    protected $fillable = [
        'title',
        'description',
        'location',
        
        ];
}
