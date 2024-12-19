<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Coupon extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_amount',
        'valid_until'
    ];
}
