<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);
Route::post('/films', [FilmController::class, 'store']);
Route::patch('/films/{id}', [FilmController::class, 'update']);
Route::get('/films/{id}/similar', [FilmController::class, 'similar']);

Route::get('/comments/{id}', [CommentController::class, 'index']);
Route::post('/comments/{id}', [CommentController::class, 'store']);
Route::patch('/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

Route::get('/favorite', [FavoriteController::class, 'index']);
Route::post('/films/{id}/favorite', [FavoriteController::class, 'store']);
Route::delete('/films/{id}/favorite', [FavoriteController::class, 'destroy']);

Route::get('/genres', [GenreController::class, 'index']);
Route::patch('/genres/{genre}', [GenreController::class, 'update']);

Route::get('/promo', [PromoController::class, 'show']);
Route::post('/promo/{id}', [PromoController::class, 'store']);

Route::get('/user', [UserController::class, 'show']);
Route::patch('/user', [UserController::class, 'update']);
