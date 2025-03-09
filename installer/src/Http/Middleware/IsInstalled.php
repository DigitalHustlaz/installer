<?php

namespace DigitalHustlaz\Installer\Http\Middleware;

use Closure;

class IsInstalled
{
    public function handle($request, Closure $next)
    {


        return $next($request);
    }
}
