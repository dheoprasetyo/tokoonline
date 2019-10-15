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
    Route::get('media', 'HomeController@media')->name('media');
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::get('transaction', 'TransactionController@index')->name('transaction');
    Route::get('transaction/{code}/{status}', 'TransactionController@status')->name('transaction.status');
    Route::get('transaction/{code}/detail/data','TransactionController@detail')->name('transaction.detail');
    Route::get('transaction/{code}/detail/data/cetak','TransactionController@cetakpdf')->name('pdf');
    Route::get('user','UserController@index')->name('user');
    Route::get('user/status/{id}','UserController@changestatus');
    // Route::get('category', 'CategoryController@index')->name('category');
    // Route::post('/category/store', 'CategoryController@store')->name('category.store');

});
