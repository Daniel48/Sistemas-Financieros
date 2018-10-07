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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes

Route::middleware(['auth'])->group(function () {

    Route::resource('roles', 'RoleController');
    Route::resource('clientes', 'ClienteController');
    Route::resource('solicitud', 'SolicitudController');
    Route::resource('cuentas', 'CuentaController');
    Route::resource('transacciones', 'TransaccionController');

    Route::resource('tipo', 'tipoClienteController');
    Route::resource('tipos', 'tipoCuentaController');

    Route::resource('monedas', 'MonedaController');
//Productos


    Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('permission:products.create');

    Route::get('products/index', 'ProductController@index')->name('products.index')
        ->middleware('permission:products.index');

    Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
        ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
        ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('permission:products.edit');

///Usuarios

    Route::resource('users', 'UserController');

///privilegios
    Route::resource('privilegios', 'PrivilegioController');


});
