<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\CosmetologistController;
use App\Http\Controllers\ServiceController;

// Маршруты для ClientController
Route::get('/clients', [ClientController::class, 'index']); // Список всех клиентов
Route::get('/client/{id}', [ClientController::class, 'show']); // Конкретный клиент

// Маршруты для SeanceController
Route::get('/seances', [SeanceController::class, 'index']); // Список всех косметологов
Route::get('/seance/{id}', [SeanceController::class, 'show']); // Конкретный косметолог

// Маршруты для CosmetologistController
Route::get('/cosmetologists', [CosmetologistController::class, 'index']); // Список всех косметологов
Route::get('/cosmetologist/{id}', [CosmetologistController::class, 'show']); // Конкретный косметологов

Route::get('/services', [ServiceController::class, 'index']); // Список всех косметологов
Route::get('/service/{id}', [ServiceController::class, 'show']);
