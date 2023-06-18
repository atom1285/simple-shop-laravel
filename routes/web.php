<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebControllers\Shop\CatalogController;
use App\Http\Controllers\WebControllers\Shop\ItemController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::group(['prefix' => 'catalog'], function () {
   Route::get('/', [CatalogController::class, 'index']);
   Route::get('/item/{id}', [ItemController::class, 'show']);
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', function () {
        //
    });
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
