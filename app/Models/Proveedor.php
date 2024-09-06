<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $nombre
 * @property $categoria_id
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{

  static $rules = [
    'nombre' => 'required',
    'categoria_id' => 'required',
    'telefono' => 'required',
    'correo' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'categoria_id', 'direccion', 'ruc',  'telefono', 'correo', 'detalles'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function categoria()
  {
    return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
  }
}
