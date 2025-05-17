<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class MicroLendingApi extends Model
{
    //
    use HasFactory;

    protected $table = 'micro_lending';
    protected $fillable = [
         'name',
        'email',
        'password',
        'credit_score',
        
        
        'user_id',
        'amount',
        'credited_at',
        'payment_at',
        ];
        
    /*protected $table = 'creditors';
    protected $fillable = [
         'user_id',
        'amount',
        'credited_at',
        'payment_at',
        ];
        */
}
