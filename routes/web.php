<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

App::setLocale("es");

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dogs', 'App\Http\Controllers\DogController');
