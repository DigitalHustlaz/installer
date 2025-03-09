<?php

namespace DigitalHustlaz\Installer;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use DigitalHustlaz\Installer\Http\Middleware\InstallCheck;
use DigitalHustlaz\Installer\Http\Middleware\IsInstalled;
use DigitalHustlaz\Installer\Http\Middleware\ValidateLicense;

class InstallerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('is_installed', IsInstalled::class);
        $router->aliasMiddleware('install_check', InstallCheck::class);
        $router->aliasMiddleware('trans', ValidateLicense::class);

        $this->publishes([
            __DIR__.'/assets' => base_path('assets/global/installer')
        ],'installer-assets');

        $this->loadViewsFrom(__DIR__.'/views','installer');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->mergeConfigFrom(__DIR__.'/config/installer.php','installer');
    }
}
