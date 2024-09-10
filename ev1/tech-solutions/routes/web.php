<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AuthController;

// Rutas para la API de proyectos
Route::prefix('api')->group(function () {
    // Rutas CRUD para proyectos
    Route::post('/proyectos', [ProyectoController::class, 'store']);
    Route::get('/proyectos', [ProyectoController::class, 'index']);
    Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
    Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
    Route::patch('/proyectos/{id}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);
});

// Rutas de autenticación
Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Rutas para vistas de proyectos
Route::prefix('proyectos')->group(function () {
    // Ruta para mostrar la lista de proyectos
    Route::get('/', [ProyectoController::class, 'index'])->name('proyectos.index');

    // Ruta para mostrar el formulario de creación
    Route::get('/create', [ProyectoController::class, 'create'])->name('proyectos.create');
    
    // Ruta para mostrar un proyecto específico
    Route::get('/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');
    
    // Ruta para mostrar el formulario de edición
    Route::get('/{id}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');

    // Ruta para manejar el envío del formulario de creación
    Route::post('/', [ProyectoController::class, 'store'])->name('proyectos.store');
    
    // Ruta para manejar el envío del formulario de actualización
    Route::put('/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');
    
    // Ruta para manejar la eliminación de un proyecto
    Route::delete('/{id}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');
});
