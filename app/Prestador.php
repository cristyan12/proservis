<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = 'prestador';

    protected $fillable = [
    	'nit', 'cedula', 'usuario_tipo', 'contrato_id', 'nombre',
    	'apellido', 'direccion', 'barrio_id', 'telefono', 'genero_id',
    	'profesion', 'estado', 'borrado'
    ];

    protected $casts = [
    	'usuario_tipo' => 'integer',
    	'contrato_id' => 'integer',
    	'barrio_id' => 'integer',
    	'genero_id' => 'integer',
    	'profesion' => 'integer',
    	'estado' => 'boolean',
    	'borrado' => 'boolean'
    ];
}
