<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/home', 'MainController@home')
-> name('home');

//Singolo impiegato
Route::get('/employee/show/{id}', 'MainController@show')
-> name('show');

// modifica elemento
Route::get('edit/employee/{id}', 'MainController@edit')
-> name('edit');
Route::post('update/employee/{id}', 'MainController@update')
-> name('update');

//eliminare elemento
Route::get('destroy/{id}', 'MainController@destroy')
-> name('destroy');

//aggiungere elemento
Route::get('/employee/create', 'MainController@create')
-> name('create');
Route::post('/employee/store', 'MainController@store')
-> name('store');
