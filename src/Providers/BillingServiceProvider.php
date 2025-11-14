<?php

namespace Budventure\Billing\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load package routes so /api/billing/ping exists
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }
}
