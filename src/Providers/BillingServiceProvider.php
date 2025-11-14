<?php

namespace Budventure\Billing\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::prefix('api/billing')
            ->name('billing.')
            ->middleware('api')
            ->group(__DIR__.'/../Routes/api.php');
    }
}
