<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/about', function () {
        return \Inertia\Inertia::render('About', []);
    })->name('page__about');



    Route::get('/doctrine', function () {
        return \Inertia\Inertia::render('About', []);
    })->name('page__doctrine');

    Route::get('/contact', function () {
        return \Inertia\Inertia::render('About', []);
    })->name('page__contact');
});
