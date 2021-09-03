<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 *
 * @property $id
 * @property $peso
 * @property $tamaño
 * @property $cantidad
 * @property $estado
 * @property $idTipoFK
 * @property $idMarcaFK
 * @property $idProveedorFK
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiale extends Model
{
    
    static $rules = [
		'peso' => 'required',
		'tamaño' => 'required',
		'cantidad' => 'required',
		'estado' => 'required',
		'idTipoFK' => 'required',
		'idMarcaFK' => 'required',
		'idProveedorFK' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['peso','tamaño','cantidad','estado','idTipoFK','idMarcaFK','idProveedorFK'];



}
