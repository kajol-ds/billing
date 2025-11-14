<?php

use Illuminate\Support\Facades\Route;

Route::get('billing/ping', fn () => response()->json(['ok' => true]));
