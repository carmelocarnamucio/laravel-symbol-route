<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@Home') -> name('home');

Route::get('blog', 'MainController@Blog') -> name('blog');

Route::get('about', 'MainController@About') -> name('about');
