<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('service.dimephar');
})->name('dimephar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('service.dimephar');
    });
});
