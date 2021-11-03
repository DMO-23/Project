<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    
});

Route::resource('dashboard','DashboardtController');

Route::group(['middleware'=>['auth']],function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('proveedores','ProveedorController');
Route::get('proveedores-pdf','ProveedorController@exportPDF')->name('proveedores.pdf');

Route::resource('productos','ProductoController');
Route::get('productos-pdf','ProductoController@exportPDF')->name('productos.pdf');

Route::resource('clientes','ClienteController');
Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');

Route::resource('menu','MenuController');
Route::resource('aluminio','AluminioController');
Route::get('aluminio-pdf','AluminioController@exportPDF')->name('aluminio.pdf');



Route::resource('herraje','HerrajeController');
Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');
Route::resource('plastico','PlasticoController');
Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');
Route::resource('vidrio','VidrioController');
Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');
Route::resource('vinil','VinilController');
Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');
//Route::get('clientes-pdf','ClienteController@exportPDF')->name('clientes.pdf');

});
Auth::routes();
