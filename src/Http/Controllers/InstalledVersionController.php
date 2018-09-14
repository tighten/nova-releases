<?php

namespace Tightenco\NovaReleases\Http\Controllers;

use Laravel\Nova\Nova;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InstalledVersionController extends Controller
{
    public function __invoke()
    {
        return response()->json(['installed_version' => Nova::version()]);
    }
}