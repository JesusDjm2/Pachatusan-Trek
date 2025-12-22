<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'slug',
        'imgThumb',
        'category_id',
    ];
    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'subcategory_tour', 'subcategory_id', 'tour_id');
    }
    public function category()
    {
        return $this->belongsTo(Categoria::class, 'category_id');
    }
}
