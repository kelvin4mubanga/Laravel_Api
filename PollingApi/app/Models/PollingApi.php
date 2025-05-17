<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingApi extends Model
{
    use HasFactory;
    
    protected $table = 'PollingApi';
    protected $fillable = [
        'Question',
        'pubdate',
        
        ];
}
