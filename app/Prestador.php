<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = 'prestador';

    protected $fillable = [
    	'nit', 'cedula', 'usurario_tipo', 'contrato_id', 'nombre',
    	'apellido', 'direccion', 'barrio_id', 'telefono', 'genero_id',
    	'profesion', 'estado', 'borrado'
    ];
}
