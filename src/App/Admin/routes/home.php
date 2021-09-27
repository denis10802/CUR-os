<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\App\Admin\Controllers\HomeController::class, 'index']);
