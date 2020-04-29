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

Route::get('/', 'SnippetsController@index')->name('home');
Route::get('/snippets/create','SnippetsController@create')->name('snippet.add');
Route::get('/snippets/{slug}/{snippet}','SnippetsController@show');
Route::post('/snippets','SnippetsController@store')->name('snippet.store');
Route::post('/snippets/{snippet}','SnippetsController@update');
Route::delete('/snippets/{snippet}','SnippetsController@destroy');
Route::get('/snippets/{slug}/{snippet}/fork','SnippetsController@create')->name('snippet.fork');



