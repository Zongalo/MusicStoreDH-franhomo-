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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/cuerda', 'CuerdaController@index');

Route::get('/viento', 'VientoController@index');

Route::get('/percucion', 'PercucionController@index');

Route::get('/categorias', function(){
	return view('categorias');
});
Route::get('/register', function(){
	return view('register<');
});

Route::get('/faq', function(){
	return view('faq');
});

Route::get('/perfil', function(){
	return view('perfil');
})->middleware('auth');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
