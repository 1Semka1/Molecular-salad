<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;


Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/reviews', function () {
//     return view('reviews');
// })->name('reviews');

Route::get('/User_reviews', [UserDataController::class, 'allData'])->name('reviews');
Route::post('/User_data', [UserDataController::class, 'submit'])->name('data');