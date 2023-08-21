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

Route::get('foo', function () {
	return 'Hello World';
});

Route::get('home', function () {
	return view('home');
});

Route::get('admin/categories', 'App\Http\Controllers\CategoriesController@home');
Route::get('admin/categories/show/{id}', 'App\Http\Controllers\CategoriesController@show');
Route::get('admin/categories/new', 'App\Http\Controllers\CategoriesController@new');
Route::post('admin/categories/store', 'App\Http\Controllers\CategoriesController@store');
Route::get('admin/categories/edit/{id}', 'App\Http\Controllers\CategoriesController@edit');
Route::post('admin/categories/update/{id}', 'App\Http\Controllers\CategoriesController@update');
Route::get('admin/categories/delete/{id}', 'App\Http\Controllers\CategoriesController@delete');
