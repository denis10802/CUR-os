<?php

declare(strict_types=1);

use App\App\Admin\Controllers\DepartmentsController;
use App\App\Admin\Controllers\HomeController;
use App\App\Admin\Controllers\SpeakerController;
use App\App\Admin\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
});

Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentsController::class, 'index'])->name('departments.index');
    Route::get('/create', [DepartmentsController::class, 'create'])->name('departments.create');
    Route::post('/', [DepartmentsController::class, 'store'])->name('departments.store');
});

Route::prefix('speakers')->group(function () {
    Route::get('/', [SpeakerController::class, 'index'])->name('speakers.index');
    Route::get('/create', [SpeakerController::class, 'create'])->name('speakers.create');
    Route::post('/', [SpeakerController::class, 'store'])->name('speakers.store');
    Route::get('/{id}/{slug}/edit', [SpeakerController::class, 'edit'])->name('speakers.edit');
    Route::post('/{id}/{slug}', [SpeakerController::class, 'update'])->name('speakers.update');
});
