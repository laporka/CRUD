<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', function () {
    return view('welcome1');
});


Route::get('/route_sum', [TestController::class, 'Sum']);

Route::get('/myPost', [TestController::class, 'myTest']);

// Route::redirect('/route_sum', '/myPost');

// Route::view('/myPost', 'welcome', ['name' => 'Kolya']);

// Route::get('/user/{id}', function (string $id) {
//     dd($id);
// });

// Route::get('/posts/{post}/comments/{comment}', function (string $post, string $comment) {
//     dump($post);
//     dd($comment);
// });

// Route::get('/user/{name?}', function (?string $name = 'John') {
//     dd($name);
// });

// Route::get('/user/{name}', function (string $name) {
//     dd($name);
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     dd($id, $name);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/user/profile', function () {
//     dd("1r1r2fwfdf");
// })->name('profile');

// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', ['movie', 'song', 'painting']);


// Route::prefix('admin')->group(function () {
//     Route::get('/user', [TestController::class, 'user']);

//     Route::get('/users', [TestController::class, 'users']);
// });





Route::get('/table', [TableController::class, 'table']);
