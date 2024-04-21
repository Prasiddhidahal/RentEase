<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'date_of_birth',
        'street_name',
        'city',
        'area',
        'user_name',
        'email',
        'password',
        'phone_number',
        'gender',
        'avatar',
        'document',
        'status',
        'role',
        'avatar',
        

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function loginSecurity()
{
    return $this->hasOne(LoginSecurity::class);
}
public function chatrequestsents(){
    return $this->hasMany(ChatRequest::class,'client_id');
}
public function chatrequestreceiveds(){
    return $this->hasMany(ChatRequest::class,'owner_id');
}
//Relationship with listings
public function properties(){
    return $this->hasMany(Property_detail::class,'user_id');
}
public function likes()
{
    return $this->hasMany(Customer_property_fav::class);
}

public function comments()
{
    return $this->hasMany(Comment::class);
}
public function likedProperties()
{
    return $this->belongsToMany(Property_detail::class, 'customer_property_favs', 'user_id', 'property_id');
}
public function propertyInteractions()
{
    return $this->hasMany(UserPropertyInteraction::class);
}
}
