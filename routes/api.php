<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () { return view('welcome'); });                                                      //Home

Route::get('/todo', 'App\Http\Controllers\TodoController@index') -> name('todo.index');                        // View All
Route::get('/todo/{id}/read', 'App\Http\Controllers\TodoController@view') -> name('todo.view');                // View One
Route::get('/todo/create', 'App\Http\Controllers\TodoController@create') -> name('todo.create');               // Create New
Route::post('/todo/create', 'App\Http\Controllers\TodoController@insert') -> name('todo.insert');              // Insert New
Route::get('/todo/{id}/update', 'App\Http\Controllers\TodoController@edit') -> name('todo.edit');              // Update 
Route::put('/todo/{id}/update/data', 'App\Http\Controllers\TodoController@update') -> name('todo.update');     // Update 
Route::get('/todo/{id}/delete', 'App\Http\Controllers\TodoController@destroy') -> name('todo.destroy');        // Delete