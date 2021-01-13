<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_path', 'name', 'description', 'owner', 'agent', 'status', 'price', 'beds', 'bath', 'property_type', 'featured', 'land_size', 'location', 'state_of_property', 'facts_and_features', 'likes', 'impression', 'shares', 'saves'
    ];
}
