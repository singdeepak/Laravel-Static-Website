<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RestoController;
use Illuminate\Queue\Console\RestartCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', [RestoController::class, 'index']);
Route::get('/service', [RestoController::class, 'service']);
Route::get('/gallery', [RestoController::class, 'gallery']);
Route::get('/faq', [RestoController::class, 'faq']);
Route::get('/about', [RestoController::class, 'about']);
Route::get('/contact', [RestoController::class, 'contact']);
