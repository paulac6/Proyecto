<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $tipodoc
 * @property $numerodoc
 * @property $telcelular
 * @property $correo
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'tipodoc' => 'required',
		'numerodoc' => 'required',
		'telcelular' => 'required',
		'correo' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','tipodoc','numerodoc','telcelular','correo','estado'];



}
