<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MentionsLegalesController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/mentionslegales', [MentionsLegalesController::class, 'index'])->name('mentions-legales');