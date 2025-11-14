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
        // Example: publish config or load routes later.
        // $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }
}
