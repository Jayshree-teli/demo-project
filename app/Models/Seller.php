<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'city',
        'state',
        'pincode',
        'shop_name',
        'shop_type',
        'shop_image',
        'shop_logo',
    ];

      protected $hidden = [
        'password',
    ];
}
