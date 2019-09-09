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



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::view('/contact','contact')->name('contact');

Route::post('contact', 'MessageController@store');

Route::get('project','ProjectController@index')->name('projects.index');
Route::get('project/{id}','ProjectController@show')->name('projects.show');

/*



Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact','contact')->name('contact');
Route::get('/portfolio','ProjectController@index')->name('portfolio');
*/
