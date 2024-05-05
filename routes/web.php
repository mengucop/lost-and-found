<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PicviewController;
use App\Http\Controllers\ClaimController;
use App\Models\Student;
use App\Models\Item;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home/{username}', [HomeController::class, 'index']);
Route::post('/home/{username}', [HomeController::class, 'add']);

Route::get('/picview/{id}', [PicviewController::class, 'index']);
//Route::get('/profile/{username}/{id}', [PicviewController::class, 'index']);
Route::get('/picview/delete/{id}', [PicviewController::class, 'delete']);

Route::get('/profile/{username}', [ProfileController::class, 'index']);
Route::put('/profile/{username}', [ProfileController::class, 'profile_update']);
Route::get('/profile/{username}/delete', [ProfileController::class, 'delete']);

Route::get('/claim', [ClaimController::class, 'index']);
Route::get('/claim/pic/{id}', [ClaimController::class, 'claim']);
Route::get('/claim/approve/{student}/{id}', [ClaimController::class, 'approve']);
Route::get('/claim/delete/{student}/{id}', [ClaimController::class, 'delete']);

Route::get('/logout', [LogoutController::class, 'logout']);