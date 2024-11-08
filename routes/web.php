<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

// Rutas para la gestión de citas
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard (acceso solo para usuarios autenticados y verificados)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rutas protegidas para el perfil (usando la constante definida en RouteServiceProvider)
Route::middleware('auth')->group(function () {
    Route::get(RouteServiceProvider::PROFILE, [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch(RouteServiceProvider::PROFILE, [ProfileController::class, 'update'])->name('profile.update');
    Route::delete(RouteServiceProvider::PROFILE, [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Archivo de rutas de autenticación
require_once __DIR__.'/auth.php';
