<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $table = 'subcategorias';
    protected $fillable = [
        'nombre',
        'slug',
        'imgThumb',
        'categoria_id',
    ];
    public function tours()
    {
        return $this->belongsToMany(Estour::class, 'subcategorias_estour', 'subcategoria_id', 'tour_id');
    }
    public function categoria()
    {
        return $this->belongsTo(EsCategoria::class, 'categoria_id');
    }
}
