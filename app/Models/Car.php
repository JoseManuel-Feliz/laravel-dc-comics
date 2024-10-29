<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillabile = [
        'name',
        'brand',
        'engine',
        'top_speed',
        'power',
        'country',
        'image_url',
        'weight',
        'description'
    ];
}
