<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use  App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');