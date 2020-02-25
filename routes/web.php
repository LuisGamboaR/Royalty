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

Route::get('/', function () {
    return view('auth/login');
});



Auth::routes();
Route::resource('usuarios','WorkerController');
Route::resource('clientes','ClientController');
Route::resource('productos','ProductController');
Route::resource('clientes-productos','ClientProductController');
Route::resource('bitacoras','BitacoraController');
Route::resource('gastos','GastoController');
Route::resource('cierre','CierreController');





/**************************************************************\
*           RESPALDO Y RESTAURACION DE LA BASE DE DATOS        *
/**************************************************************/
Route::get("backup", "BackupController@index")->name("backup.index");

Route::get('backup/create', 'BackupController@create')->name('backup.create');

Route::get('backup/restore/{filename}', 'BackupController@restore')->name('backup.restore');

Route::get('backup/download/{filename}', 'BackupController@download')->name('backup.download');

Route::get('backup/delete/{filename}', 'BackupController@delete')->name('backup.delete');



Route::get('/home', 'HomeController@index')->name('home');


Route::post('/suma', 'ProductController@suma')->name('producto.suma');

//AJAX
Route::get('/getproducts', 'ClientProductController@getproducts')->name('producto.getproducts');
Route::get('/getclients', 'ClientProductController@getclients')->name('cliente.getclients');
