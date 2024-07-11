<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/', function () { return view('dashboard'); })->name('dashboard');

    Route::controller(IngredientController::class)->prefix('ingredients')->name('ingredients.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{ingredient}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });

    Route::controller(RecipesController::class)->prefix('recipes')->name('recipes.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{recipe}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });
    
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
