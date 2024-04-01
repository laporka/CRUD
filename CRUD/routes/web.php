<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CreateController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/table', [TableController::class, 'table']);

Route::get('/form', [TableController::class, 'form']);

Route::post('/form', [CreateController::class, 'actionCreate'] )->name('table.add');

Route::get('/getDB', [CreateController::class, 'myFunc']);