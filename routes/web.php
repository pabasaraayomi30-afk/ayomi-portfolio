<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMsgController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [SendMsgController::class, 'store'])
    ->name('contact.store');
