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

Route::name('admin.')->group(function(){
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    // Route::get('category', 'CategoryController@index')->name('category');
    // Route::post('/category/store', 'CategoryController@store')->name('category.store');

});
