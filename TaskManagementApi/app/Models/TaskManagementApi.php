<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskManagementApi extends Model
{
    use HasFactory;
    protected $table = 'taskmanagementapi';
    protected $fillable = [
    'task',
    ];
}
