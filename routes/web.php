<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foods', [FoodController::class, 'index'])->middleware('auth');
Route::get('/foods/create', [FoodController::class, 'create'])->name('foods.create');
Route::post('/foods', [FoodController::class, 'store']);
Route::get('/foods/{id}', [FoodController::class, 'show'])->middleware('auth');
Route::delete('/foods/{id}', [FoodController::class, 'destroy'])->name('foods.destroy')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
