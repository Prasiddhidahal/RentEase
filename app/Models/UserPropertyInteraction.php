<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPropertyInteraction extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'property_id', 'interaction_type'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function property()
    {
        return $this->belongsTo(Property_detail::class, 'property_id');
    }
}
