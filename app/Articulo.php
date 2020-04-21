<?php

namespace App;
use App\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //

    public function cliente(){
        return $this->belongsTo("App\Cliente");
    }

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

    public function calificaciones(){
        return $this->morphMany("App\Calificaciones","calificacion");
    }


}
