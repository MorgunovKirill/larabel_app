<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->mapApiRoutes();
        $this->mapAdminRoutes();
        $this->mapUserRoutes();
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            -> as('api.')
            ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes(): void
    {
        Route::prefix('admin')
            -> as('admin.')
            ->middleware(['web', 'auth', 'role:admin'])
            ->group(base_path('routes/admin.php'));
    }

    protected function mapUserRoutes(): void
    {
        Route::prefix('user')
            -> as('user.')
            ->middleware(['web'])
            ->group(base_path('routes/user.php'));
    }
}
