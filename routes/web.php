<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/auth-login', function () {
    return view('pages.auth.login');
});

Route::get('/auth-register', function () {
    return view('pages.auth.register');
});

// Authentication
Route::post('/auth-user-signin', [UserController::class, 'login']);
Route::post('/auth-user-signup', [UserController::class, 'register']);
Route::get('/logout', [UserController::class,'logout']);
Route::get('/admin/user-dashboard', [UserController::class,'dashboard']);
Route::get('/admin/user-posts', [PostController::class,'index']);
Route::post('/admin/user-post', [PostController::class,'store']);
