<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/table', [TableController::class, 'table']);