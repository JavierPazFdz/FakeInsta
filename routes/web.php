<?php

use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/account', [AccountController::class, 'index'])->name('register');
Route::post('/account', [AccountController::class, 'store']);

Route::get('/muro', [PostController::class, 'index'])->name('post.index');