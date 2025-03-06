<?php

use App\Http\Controllers\ColegialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/colegial/{id}', [ColegialController::class, 'show']);
