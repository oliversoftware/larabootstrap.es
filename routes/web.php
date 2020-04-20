<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Articulo;
use App\Cliente;

Route::get('/', function () {
    return view('welcome');
});


route::get('/','PaginasController@index');
route::get('/crear','PaginasController@create');
route::get('/articulos','PaginasController@store');
route::get('/mostrar','PaginasController@show');
route::get('/contacto','PaginasController@contactar');
route::get('/galeria','PaginasController@galeria');
route::get('/insertar','PaginasController@insertar');
Route::get('/leer', function () {

    //$datos=\App\Articulo::all();


    $datos=\App\Articulo::where('pais_origen','CHINA')->orderBy('nombre_articulo')->get();

        return $datos;
});

Route::get('/guardar', function () {



    $articulo=new Articulo;

    $articulo->nombre_articulo='PANTALONES';
    $articulo->precio=150;
    $articulo->pais_origen='España';
    $articulo->seccion='confecciones';
    $articulo->observaciones='Lavados a la pieda';

    $articulo->save();




    return $articulo;
});

Route::get('/actualizar', function () {



    $salida=Articulo::where('seccion','UTENSILIOS')->where('pais_origen','SUIZA')->update(['precio'=>90]);
    /*


    $articulo=new Articulo();
    $articulo=$articulo->find(8);

    $articulo->nombre_articulo='PANTALONES';
    $articulo->precio=60;
    $articulo->pais_origen='España';
    $articulo->seccion='confecciones';
    $articulo->observaciones='Lavados a la pieda';

    $articulo->save();

*/

    return $salida;
});

Route::get('/borrar', function () {



    $articulo=Articulo::find(1)->delete();



    return $articulo;
});



Route::get('/insertarVarios', function () {


$r=Articulo::create(['nombre_articulo'=>'Impresora','precio'=>50,'pais_origen'=>'COLOMBIA','observaciones'=>'nada que decir','seccion'=>'INFORMATICA']);

echo $r;

});



Route::get('/borrar', function () {


$r=Articulo::find(4)->delete();
    echo $r;

});

Route::get('/cliente/{id}/', function ($id) {





    return Cliente::find($id)->articulo;

});











