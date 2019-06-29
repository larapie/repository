<?php

namespace Larapie\Repository;

use Illuminate\Support\ServiceProvider;

class LarapieRepositoryServiceProvider extends ServiceProvider
{
    protected $commands = [

    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
        $this->registerCommands();
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/Config/repository.php', 'repository');
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/Config/repository.php' => config_path('repository.php'),
        ]);
    }

    protected function registerCommands()
    {
        $this->commands($this->commands);
    }
}
