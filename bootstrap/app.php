<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {
        // ✅ Alias middleware custom
        $middleware->alias([
            'is_admin' => App\Http\Middleware\IsAdmin::class,
        ]);

        // ✅ Middleware session wajib diaktifkan
        $middleware->append(
            Illuminate\Session\Middleware\StartSession::class
        );
    })

    ->withProviders([
        // ✅ Provider Session
        Illuminate\Session\SessionServiceProvider::class,
    ])

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })

    ->create();
