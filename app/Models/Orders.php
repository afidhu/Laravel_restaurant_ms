<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable=['name', 'amount', 'phone_number', 'status'];
}
