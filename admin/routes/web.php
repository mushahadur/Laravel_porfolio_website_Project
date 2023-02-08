<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServicesController;

Route::get('/', [HomeController::class, 'homeIndex'])->name('home');
Route::get('/visitors-info', [VisitorController::class, 'visitorIndex'])->name('visitors');
Route::get('/services', [ServicesController::class, 'serviceIndex'])->name('services');