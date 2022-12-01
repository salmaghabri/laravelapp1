<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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
// Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index']); 
// Route::get('/blogs/create', [\App\Http\Controllers\BlogController::class, 'create']); 
// Route::post('/blogs', [\App\Http\Controllers\BlogController::class, 'store']); 
// Route::get('blogs/{article}', [\App\Http\Controllers\BlogController::class, 'show']); 
// Route::get('blogs/{blog}/edit', [\App\Http\Controllers\BlogController::class, 'edit']); 
// Route::put('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'update']); 
// Route::get('blogs/{blog}/delete', [\App\Http\Controllers\BlogController::class, 'delete']); 
// Route::delete('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'destroy']); 
Route::resource('blogs', BlogController::class);
Route::get('blogs/{blog}/delete', [BlogController::class, 'delete'])->name('blogs.delete'); 




Route::resource('users',UserController::class);
Route::get('users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');

Route::get('/', function () {
    return view('welcome');
});
