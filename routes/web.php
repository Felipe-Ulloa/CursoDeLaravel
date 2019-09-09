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

$portfolio=[

['title' => 'proyecto #1'],
['title' => 'proyecto #2'],
['title' => 'proyecto #3'],
['title' => 'proyecto #4'],
];

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact','contact')->name('contact');

Route::post('contact', 'MessagesController@store');

/*

Route::resource('projects','PortfolioController');

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact','contact')->name('contact');
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
*/
