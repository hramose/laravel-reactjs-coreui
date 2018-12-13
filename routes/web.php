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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('client');
});


// Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin');
    });

    Route::resource('/api/products','ProductController');
    Route::resource('/api/recipe','RecipeController');
    Route::get('/recipe/show/{id}','RecipeController@showPost');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
