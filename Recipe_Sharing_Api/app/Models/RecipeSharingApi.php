<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class RecipeSharingApi extends Model
{
    //
    use HasFactory;
    protected $table = 'recipe_sharing';
    protected $fillable = [
    'name',
    'tags',
    'ingredients',
    'instructions',
    'published_at',
    
    ];
}
