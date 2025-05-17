<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class DigitalWalletApi extends Model
{
    //
    use HasFactory;

    protected $table = 'digital_wallet';
    protected $fillable = ['name'];
}
