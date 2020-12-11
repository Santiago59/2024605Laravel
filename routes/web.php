<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;


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
//PUNTO A// ruta nombre de aprendiz y muestra los datos principales 
Route::get('/andresperez',function(){
    return  '<h2>Mis Datos Personales </h2> <br>
        Nombres: Andrés Pérez<br>
        Edad: 19<br>
        Correo: Andrespereza@gmail.com<br>
        Celular:3122979822<br>
        Direccion: Cra 31#29-22';
});
//ruta aprendiz y que permite pasar un parámetro por la ruta y valida la entrada de solo números
Route::get('/aprendiz/{varnum?}', function($varnum='no hay parametro'){
    return '<h2>Aprendiz</h2>'. $varnum;
})->where('varnum', '[0-9]+');
//PUNTO B//Crear una vista (en la ubicación correspondiente del proyecto view), llamada DatosAprendiz y la ruta del mismo nombre que muestre mediante una tabla Html sus datos básicos.
Route::get('/DatosAprendiz/', function(){
    return view('DatosAprendiz');
});
//-	Crear una vista llamada productos y la ruta del mismo nombre que muestre mediante una tabla, el listado de 5 productos (código, nombre, valor unitario, existencia)
Route::get('/Productos/',function(){
    return view('Productos');
});
//PUNTO C//Crear el controlador EstudianteController, con el nombre de ruta y vista ruta estudiante que permita pasar una variable de tipo array hasta la vista con los nombres de los integrantes del grupo
Route::get('/Estudiantes/',function(){
    return view('Estudiantes');
});
//-	Crear un segundo controlador llamado MateriasController con el nombre de la ruta y vista materias que permita pasar por parámetro el nombre de la materia que va a cursar el estudiante en la vista.
Route::get('/Materias/',function(){
    return view ('Materias');
});

Route::get('/plantilla', [VistaController::class, 'plantillaweb']);
Route::get('/cliente', [ClienteController::class, 'cliente'])->name('verCliente');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('verPedidos');
Route::get('/productos', [ProductosController::class, 'productos'])->name('verProductos');
