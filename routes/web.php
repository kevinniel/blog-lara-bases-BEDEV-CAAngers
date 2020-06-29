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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/{id}/show', 'CategoryController@show')->name('categories.show');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories', 'CategoryController@destroy')->name('categories.destroy');

Route::get('/blogs', 'BlogController@index')->name('blogs.index');
Route::get('/blogs/{id}/show', 'BlogController@show')->name('blogs.show');
Route::get('/blogs/create', 'BlogController@create')->name('blogs.create');
Route::get('/blogs/{id}/edit', 'BlogController@edit')->name('blogs.edit');
Route::post('/blogs', 'BlogController@store')->name('blogs.store');
Route::put('/blogs/{id}', 'BlogController@update')->name('blogs.update');
Route::delete('/blogs', 'BlogController@destroy')->name('blogs.destroy');
