<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Nova;
use Zttp\Zttp;

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

Route::get('releases', function (Request $request) {
    $data = Cache::remember('tightenco-nova-releases::releases', 60, function () {
        // @todo: Cache it on novapackages.com so as to save load on the Nova folks <3
        $response = Zttp::get('https://nova.laravel.com/api/releases');
        return $response->json();
    });

    return response()->json($data);
});

Route::get('installed-version', function (Request $request) {
    return response()->json(['installed_version' => Nova::version()]);
});
