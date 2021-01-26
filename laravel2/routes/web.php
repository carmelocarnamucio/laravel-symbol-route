<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@getPagamenti') -> name('pagamenti');
Route::get('pagamentipending', 'MainController@getPagamentiPed') -> name('pagamentiPed');
