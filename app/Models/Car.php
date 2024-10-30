<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'engine_fuel_type',
        'engine_hp',
        'engine_cylinders',
        'transmission_type',
        'driven_wheels',
        'number_of_doors',
        'market_category',
        'vehicle_size',
        'vehicle_style',
        'highway_mpg',
        'city_mpg',
        'popularity',
        'msrp',
        'description',
        'image_url'
    ];
}
