<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocentController;
use App\Http\Controllers\VakController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docenten', [DocentController::class, 'index'])->name('docenten.index');
Route::get('/vakken', [VakController::class, 'index'])->name('vakken.index');
