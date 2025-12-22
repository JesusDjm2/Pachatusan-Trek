<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = [
        'nombre',
        'recorrido',
        'dias',
        'imgThumb',
        'imgFull',
        'descripcionCorta',
        'presentacion',
        'itinerario',
        'incluye',
        'importante',
        'galeria',
        'slug',
        'keywords',
    ];
    public function estour()
    {
        return $this->hasOne(Estour::class, 'relacionado_id');
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'tour_category', 'tour_id', 'categoria_id');
    }
    public function subcategorias()
    {
        return $this->belongsToMany(Subcategory::class, 'subcategory_tour', 'tour_id', 'subcategory_id');
    }
}
