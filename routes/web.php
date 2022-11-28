<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index']); // 追加
Route::get('/blogs/create', [\App\Http\Controllers\BlogController::class, 'create']); // 追記
Route::post('/blogs', [\App\Http\Controllers\BlogController::class, 'store']); 
Route::get('blogs/{article}', [\App\Http\Controllers\BlogController::class, 'show']); // 追記
Route::get('blogs/{blog}/edit', [\App\Http\Controllers\BlogController::class, 'edit']); // 追加
Route::put('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'update']); // 追加

Route::get('/', function () {
    return view('welcome');
});
