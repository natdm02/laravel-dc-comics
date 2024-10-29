<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    return view('welcome');
});

route::resource('comics', ComicController::class);
