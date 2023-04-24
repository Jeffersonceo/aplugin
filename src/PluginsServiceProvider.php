<?php

namespace App\Plugins;

use Illuminate\Support\ServiceProvider;
use App\Plugins\Console\Commands\GeneratePluginCommand;
use App\Plugins\Console\Commands\RemovePluginCommand;

class PluginsServiceProvider extends ServiceProvider
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                GeneratePluginCommand::class,
                RemovePluginCommand::class,
            ]);
        }
    }
}
