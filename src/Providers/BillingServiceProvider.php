<?php

namespace Budventure\Billing\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class BillingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bindings go here if you ever need them
    }

    public function boot(): void
    {
        // Load the package routes
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');

        // If you add views/config later, you’ll load them here too
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'billing');
        // $this->mergeConfigFrom(__DIR__.'/../config/billing.php', 'billing');
    }
}
