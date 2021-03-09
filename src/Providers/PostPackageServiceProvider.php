<?php

namespace Cms\Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(dirname(__DIR__, 1).'/routes.php');
        $path = $this->getMigrationsPath();
        $this->publishes([$path => database_path('migrations')], 'migrations');
    }
    private function getMigrationsPath()
    {
        return dirname(__DIR__, 1) . '/migrations';
    }
}
