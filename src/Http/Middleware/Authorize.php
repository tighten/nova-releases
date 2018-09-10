<?php

namespace Tightenco\NovaReleases\Http\Middleware;

use Tightenco\NovaReleases\AllReleases;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(AllReleases::class)->authorize($request) ? $next($request) : abort(403);
    }
}
