<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'travel_date',
        'travel_with',
        'comment',
        'image',
        'rating',
        'is_public',
    ];

    protected $casts = [
        'travel_date' => 'date',
        'is_public' => 'boolean',
    ];
}
