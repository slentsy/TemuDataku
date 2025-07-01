<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('aboutUs');
})->name('aboutUs');

// Route::get('/mentoring', function () {
//     return view('mentoring');
// })->middleware(['auth', 'verified'])->name('mentoring');

Route::get('/mentoring', [KatalogController::class, 'showMentoring'])
    ->middleware(['auth', 'verified'])
    ->name('mentoring');

Route::get('/practice', function () {
    return view('practice');
})->name('practice');

Route::get('/bootcamp', function () {
    return view('bootcamp');
})->name('bootcamp');

// Route::get('/katalog', function () {
//     return view('katalog');
// })->name('katalog');
Route::get('bootcamp', [KatalogController::class, 'showBootcamp'])->name('bootcamp');
Route::get('practice', [KatalogController::class, 'showPractice'])->name('practice');
Route::get('mentoring', [KatalogController::class, 'showMentoring'])->name('mentoring');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
