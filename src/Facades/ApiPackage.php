<?php

namespace api\ApiPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \api\ApiPackage\ApiPackage
 */
class ApiPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \api\ApiPackage\ApiPackage::class;
    }
}
