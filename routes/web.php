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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// “signup” 和 “/signup” 从使用上看无差别
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

// Route::prefix('todolist')->namespace('Todolist')->group(function () {
//     Route::prefix('index')->group(function () {
//         Route::get('index', 'IndexController@index');
//         Route::get('create', 'IndexController@create');
//         Route::post('store', 'IndexController@store');
//         Route::get('edit/{id}', 'IndexController@edit');
//         Route::post('update/{id}', 'IndexController@update');
//         Route::get('delete/{id}', 'IndexController@delete');
//         Route::get('destroy/{id}', 'IndexController@destroy');
//         Route::get('restore/{id}', 'IndexController@restore');
//         Route::get('forceDelete/{id}', 'IndexController@forceDelete');
//     });
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
