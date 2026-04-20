<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estour extends Model
{
    protected $table = 'estours';

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
        'relacionado_id',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'relacionado_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(EsCategoria::class, 'estour_categoria', 'tour_id', 'categoria_id');
    }

    public function subcategorias()
    {
        return $this->belongsToMany(Subcategoria::class, 'subcategorias_estour', 'tour_id', 'subcategoria_id');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }
}
