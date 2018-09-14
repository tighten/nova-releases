<?php

use Illuminate\Support\Facades\Route;
use Tightenco\NovaReleases\Http\Controllers\ReleasesController;
use Tightenco\NovaReleases\Http\Controllers\InstalledVersionController;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::get('releases', ReleasesController::class);
Route::get('installed-version', InstalledVersionController::class);
