<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddCart extends Model
{
    //
     protected $fillable = [
        'user_id', 'food_id', 'quantity','total_price'
    ];
}
