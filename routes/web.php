<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [PublicController::class, 'welcome'])->name('welcome');
