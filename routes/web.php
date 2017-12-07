<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|,
*/

Route::get("/adminRegister", "AdminController@registrar")->middleware("admin");

Route::get('/index', function(){
	return view('index');
});


Route::get('/login', function(){
	return view('login');
});

Route::get('/categorias', function(){
	return view('categorias');
});
Route::get('/register', function(){
	return view('register<');
});

Route::get('/faq', function(){
	return view('faq');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
