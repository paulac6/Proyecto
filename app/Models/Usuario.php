<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $idRol
 * @property $nombre
 * @property $apellido
 * @property $clave
 * @property $tipodoc
 * @property $numerodoc
 * @property $telcelular
 * @property $correo
 * @property $estado
 * @property $idObra
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'idRol' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'clave' => 'required',
		'tipodoc' => 'required',
		'numerodoc' => 'required',
		'telcelular' => 'required',
		'correo' => 'required',
		'estado' => 'required',
		'idObra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idRol','nombre','apellido','clave','tipodoc','numerodoc','telcelular','correo','estado','idObra'];



}
