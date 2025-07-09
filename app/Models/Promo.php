<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'image',
        'shop_id',
        'old_price',
        'new_price',
        'description',
    ];
}
