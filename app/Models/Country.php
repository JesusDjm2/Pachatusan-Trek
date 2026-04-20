<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = ['nombre', 'imagen', 'slug'];

    public function tours()
    {
        return $this->hasMany(Tour::class, 'country_id');
    }
}
