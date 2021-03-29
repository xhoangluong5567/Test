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

// Route::get('/', function () {
//     return view('frontend.home');
// });


Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
    Route::get('/', 'AdminController@getLogin');
    Route::post('/', 'AdminController@postLogin');
});

Route::get('/logout', 'AdminController@getLogout');


Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


//     Route::get('/admin', function(){
//         return view('backend.home');
//  });


Route::group(['middleware' => 'CheckLogedOut'], function () {
    Route::get('/admin', function () {
        return view('backend.home');
    });
});


Route::get('/', 'HomeController@index')->name('home');
