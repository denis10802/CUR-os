<?php

declare(strict_types=1);

namespace App\App\Admin;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class AdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var Router $router */
        $router = $this->app->get('router');

        // Auth routes
        $router
            ->middleware(['web'])
            ->group(fn (Router $router) => (require __DIR__ . '/routes/auth.php')($router));

        // TODO: refactor
        // Protected routes
        Route::middleware(['web', 'auth:web'])
            ->group(__DIR__ . '/routes/home.php');
    }
}
