<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(PageController::class)->group(function () {
    Route::get('/contacts', 'contacts')->name('pages.contacts');
    Route::get('/privacy', 'privacy')->name('pages.privacy');
    Route::get('/consent', 'consent')->name('pages.consent');
    Route::get('/payment-delivery', 'payment')->name('pages.payment');
});
