<?php

namespace Josuapsianturi\LaravelTac;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Josuapsianturi\LaravelTac\Commands\LaravelTacCommand;

class LaravelTacServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-tac')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_tac_table')
            ->hasCommand(LaravelTacCommand::class);
    }

    public function boot(): void
    {
        // Register component
        Blade::component('tac::components.dropdown', 'tac-dropdown');
    }
}
