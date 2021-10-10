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
Route::get('/bai-viet', 'ArticleController@index');

Route::get('/bai-viet/them-bai-viet', 'ArticleController@create');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/bai-viet', 'ArticleController@store');

// Route::get('/admin', 'AdminController@showPassword')->middleware('auth'); // Middleware mặc định phải đăng nhập
Route::get('/admin', 'AdminController@showPassword')->middleware(['auth', 'role:admin']);

