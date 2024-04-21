<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_detail extends Model
{
    protected $fillable = [
        'sale_type',
        'type_of_property',
        'category_of_property',
        'street_name',
        'city',
        'area',
        'total_area',
        'built_area',
        'property_facing',
        'road_size',
        'road_type',
        'build_year',
        'total_floor',
        'furnishing',
        'kitchen',
        'bed_room',
        'bath_room',
        'living_room',
        'parking',
        'amenities',
        'property_photo',
        'title',
        'description',
        'price',
        'price_label',
        'latitude',
        'longitude',
        'land_area',
        'province',

        'user_id',
        'count',
        'likes',
        'comments',

        
    ];
    use HasFactory;
    public function scopeFilter($query, array $filters){
       
        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('sale_type','like','%'.request('search').'%')
            ->orWhere('type_of_property','like','%'.request('search').'%')
            ->orWhere('category_of_property','like','%'.request('search').'%')
            ->orWhere('street_name','like','%'.request('search').'%')
            ->orWhere('city','like','%'.request('search').'%')
            ->orWhere('area','like','%'.request('search').'%')
            ->orWhere('total_area','like','%'.request('search').'%')
            ->orWhere('built_area','like','%'.request('search').'%')
            ->orWhere('province','like','%'.request('search').'%')
            ->orWhere('property_facing','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('amenities','like','%'.request('search').'%')
            ->orWhere('price','like','%'.request('search').'%');
            
        }
    }
    //Relationship To user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function likedByUsers()
{
    return $this->belongsToMany(User::class, 'customer_property_favs', 'property_id', 'user_id');
}
public function userInteractions()
{
    return $this->hasMany(UserPropertyInteraction::class);
}

}
