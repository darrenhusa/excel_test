<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@index');
Route::post('/export', 'PagesController@export');
