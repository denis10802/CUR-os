<?php

declare(strict_types=1);

use App\App\Admin\Controllers\Auth\LoginController;

return static function (Illuminate\Routing\Router $router) {
    $router->get('login', [LoginController::class, 'showLoginForm'])
        ->middleware('guest')
        ->name('login');

    $router->post('login', [LoginController::class, 'login'])
        ->middleware('guest');

    $router->post('logout', [LoginController::class, 'logout'])
        ->name('logout');
};
