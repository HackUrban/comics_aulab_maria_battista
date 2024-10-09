<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

//INSERIMENTO FUMETTI 
Route::get('/comic/create', [PublicController::class, 'createComic'])->name('createComic');