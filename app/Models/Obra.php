<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Obra
 *
 * @property $id
 * @property $nombre
 * @property $fechaInicio
 * @property $fechaEntrega
 * @property $estado
 * @property $cantidadMaterial
 * @property $tipoMaterial
 * @property $idClienteFK
 * @property $idCategoriaFK
 * @property $idUsuarioFK
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Obra extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fechaInicio' => 'required',
		'fechaEntrega' => 'required',
		'estado' => 'required',
		'cantidadMaterial' => 'required',
		'tipoMaterial' => 'required',
		'idClienteFK' => 'required',
		'idCategoriaFK' => 'required',
		'idUsuarioFK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechaInicio','fechaEntrega','estado','cantidadMaterial','tipoMaterial','idClienteFK','idCategoriaFK','idUsuarioFK'];

    //RELACION DE UNO A MUCHOS
    public function cliente(){
      return $this->belongsTo('App\Models\Cliente');
    }

}
