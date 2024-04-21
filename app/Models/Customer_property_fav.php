<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_property_fav extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_detail_id',
        'user_id'
    ];
}
