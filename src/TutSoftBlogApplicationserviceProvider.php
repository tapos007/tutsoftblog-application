<?php

namespace Tapos007\TutSoftBlogApplication;

use Illuminate\Support\ServiceProvider;

class TutSoftBlogApplicationserviceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->loadRoutesFrom(__DIR__.'/route/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
