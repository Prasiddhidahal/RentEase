<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'owner_id',
        'Status',
        'property_id'
    ];
    public function sent(){
        return $this->belongsTo(User::class,'client_id');
    }
    public function received(){
        return $this->belongsTo(User::class,'owner_id');
    }
}
?>
