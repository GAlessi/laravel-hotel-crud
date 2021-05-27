<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/home', 'MainController@home')
-> name('home');

//Singolo impiegato
Route::get('/employee/show/{id}', 'MainController@show')
-> name('show');
