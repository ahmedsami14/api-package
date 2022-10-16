<?php

namespace api\ApiPackage;

use api\ApiPackage\Commands\ApiPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ApiPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('api-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_api-package_table')
            ->hasCommand(ApiPackageCommand::class);
    }
}
