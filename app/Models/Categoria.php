<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedor[] $proveedors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{

  static $rules = [
    'nombre' => 'required',
  ];

  protected $table = 'categories';

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre'];

  public function tours()
  {
    return $this->belongsToMany(Tour::class, 'tour_category', 'categoria_id', 'tour_id');
  }
 
  public function subcategories()
  {
    return $this->hasMany(Subcategory::class, 'category_id');
  }
}
