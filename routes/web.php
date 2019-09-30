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

Route::get('/home',function(){
	return view('home');
});
Route::get('/Aboutus',function(){
	return view('Aboutus');
});
Route::get('/Contactus',function(){
	return view('Contactus');
});

Route::resource('book','BooksController');

$this->visitRoute('profile');
$this->visitRoute('profile', ['user' => 1]);



Auth::routes();

Route::get('/home', 'HomeController@index');
