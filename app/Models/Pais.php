<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';
    protected $fillable = ['nombre', 'imagen'];

   public function estours()
{
    return $this->hasMany(Estour::class);
}
}
