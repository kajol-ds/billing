<?php

use Illuminate\Support\Facades\Route;

Route::get('/billing/ping', fn () => response('', 200))->name('billing.ping');
