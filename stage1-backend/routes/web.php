<?php

use App\Http\Controllers\PalindromeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{word}',[PalindromeController::class,'retrieve'])->name('retrieve');