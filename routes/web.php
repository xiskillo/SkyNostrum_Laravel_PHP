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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {


    // RUTAS PARA LA SECCION NOTICIAS

    Route::get('/noticias', 'NoticiasController@index')->name('noticias');
    Route::get('/noticias/create', 'NoticiasController@create')->name('noticias.create');
    Route::post('/noticias/store', 'NoticiasController@store')->name('noticias.store');
    Route::get('/noticias/{id}/edit', 'NoticiasController@edit')->name('noticias.edit');
    Route::put('/noticias/{id}/update', 'NoticiasController@update')->name('noticias.update');
    Route::delete('/noticias/{id}/destroy', 'NoticiasController@destroy')->name('noticias.destroy');


    Route::get('/noticias/{noticia}', 'NoticiasController@show')->name('noticias.show');
    
    //RUTAS PARA LA SECCION PRODUCTOS

    Route::get('/productos', 'ProductosController@index')->name('productos');    
    Route::get('/productos/create', 'ProductosController@create')->name('productos.create');
    Route::post('/productos/store', 'ProductosController@store')->name('productos.store');
    Route::get('/productos/{id}/edit', 'ProductosController@edit')->name('productos.edit');
    Route::put('/productos/{id}/update', 'ProductosController@update')->name('productos.update');
    Route::delete('/productos/{id}/destroy', 'ProductosController@destroy')->name('productos.destroy');

    Route::get('/productos/{producto}', 'ProductosController@show')->name('productos.show');
   
    

    //RUTAS PARA LA SECCION CLIENTES

    Route::get('/clientes', 'ClientesController@index')->name('clientes');       
    Route::get('/clientes/create', 'ClientesController@create')->name('clientes.create');
    Route::post('/clientes/store', 'ClientesController@store')->name('clientes.store');
    Route::get('/clientes/{id}/edit', 'ClientesController@edit')->name('clientes.edit');
    Route::put('/clientes/{id}/update', 'ClientesController@update')->name('clientes.update'); 
    Route::delete('/clientes/{id}/destroy', 'ClientesController@destroy')->name('clientes.destroy');

                                    //SIN MODEL BINDING
    Route::get('/clientes/{id}', 'ClientesController@show')->name('clientes.show');


                                    //PDF CLIENTES

    Route::get('pdfclientes', 'ClientesController@pdf')->name('clientes.pdf');


    //RUTAS PARA LA SECCION VENTAS

    Route::get('/ventas', 'VentasController@index')->name('ventas');    
    Route::get('/ventas/create', 'VentasController@create')->name('ventas.create');
    Route::post('/ventas/store', 'VentasController@store')->name('ventas.store');
    Route::get('/ventas/{id}/edit', 'VentasController@edit')->name('ventas.edit');
    Route::put('/ventas/{id}/update', 'VentasController@update')->name('ventas.update'); 
    Route::delete('/ventas/{id}/destroy', 'VentasController@destroy')->name('ventas.destroy');

                                    //SIN MODEL BINDING
    Route::get('/ventas/{id}', 'VentasController@show')->name('ventas.show');

                                     //PDF CLIENTES

    Route::get('pdfventas', 'VentasController@pdf')->name('ventas.pdf');

    //RUTAS PARA LA SECCION CONTACTO

    Route::get('/contacto', 'ContactoController@index')->name('contacto');   


    // RUTA PARA GESTIONAR IMAGENES
    Route::get('/images/{path}/{attachment}', function($path, $attachment){

        $storagePath=Storage::disk($path)->getDriver()->getAdapter()->getPathPrefix();
        $imageFilePath=$storagePath.$attachment;

        if(File::exists($imageFilePath)){
            return Image::make($imageFilePath)->response();

        }

});

    
});