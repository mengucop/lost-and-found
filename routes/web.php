<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PicviewController;
use App\Models\Student;
use App\Models\Item;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home/{username}', [HomeController::class, 'index']);
Route::post('/home/{username}', [HomeController::class, 'add']);

Route::get('/home/{username}/{id}', [PicviewController::class, 'index']);
Route::get('/profile/{username}/{id}', [PicviewController::class, 'index']);
Route::get('/delete/{id}', [PicviewController::class, 'delete']);

Route::get('/profile/{username}', [ProfileController::class, 'index']);
Route::put('/profile/{username}', [ProfileController::class, 'profile_update']);

Route::get('/logout', [LogoutController::class, 'logout']);