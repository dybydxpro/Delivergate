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

Route::get('/', function () { return view('welcome'); });                                                      //Home

Route::get('/todo', 'App\Http\Controllers\TodoController@index') -> name('todo.index');                        // View All
Route::get('/todo/{id}/read', 'App\Http\Controllers\TodoController@view') -> name('todo.view');                // View One
Route::get('/todo/create', 'App\Http\Controllers\TodoController@create') -> name('todo.create');               // Create New
Route::post('/todo/create', 'App\Http\Controllers\TodoController@insert') -> name('todo.insert');              // Insert New
Route::get('/todo/{id}/update', 'App\Http\Controllers\TodoController@edit') -> name('todo.edit');              // Update 
Route::put('/todo/{id}/update/data', 'App\Http\Controllers\TodoController@update') -> name('todo.update');     // Update 
Route::get('/todo/{id}/delete', 'App\Http\Controllers\TodoController@destroy') -> name('todo.destroy');        // Delete
