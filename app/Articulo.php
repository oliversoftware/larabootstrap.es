<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //

   // protected $table="articulos";

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[

        'nombre_articulo',
        'precio',
        'pais_origen',
        'observaciones',
        'seccion'


    ];
}
