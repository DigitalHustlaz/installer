<?php

namespace DigitalHustlaz\Installer\Http\Middleware;

use Closure;
use DigitalHustlaz\Installer\Repository\App;

class ValidateLicense
{
    public function handle($request, Closure $next)
    {

        $isInstalled = file_exists(storage_path('installed'));

        return $next($request);
    }
}
