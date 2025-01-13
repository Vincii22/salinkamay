<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignLanguageController;


Route::get('/', [SignLanguageController::class, 'index']);
Route::post('/', [SignLanguageController::class, 'index']);
