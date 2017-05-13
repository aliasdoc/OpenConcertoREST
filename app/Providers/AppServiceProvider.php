<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Specified key was too long error, Laravel News post:
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Iber\Generator\ModelGeneratorProvider');
        }

        $this->app->bind('League\Fractal\Manager', function($app) {
            $fractal = new \League\Fractal\Manager;

            $serializer = new \App\Serializers\NoDataArraySerializer();

            $fractal->setSerializer($serializer);

            return $fractal;
        });
    }
}
