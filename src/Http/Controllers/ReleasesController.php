<?php

namespace Tightenco\NovaReleases\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Parsedown;

class ReleasesController extends Controller
{
    public function __invoke()
    {
        $data = Cache::remember('tightenco-nova-releases::releases', 60, function () {
            // @todo: Cache it on novapackages.com so as to save load on the Nova folks <3
            $response = Http::get('https://nova.laravel.com/api/releases')->json();

            $response['releases'] = collect($response['releases'])->map(function ($release) {
                $release['html_notes'] = (new Parsedown)->text($release['notes']);
                return $release;
            })->toArray();

            return $response;
        });

        return response()->json($data);
    }
}
