<?php

namespace Josuapsianturi\LaravelTac\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Josuapsianturi\LaravelTac\LaravelTac
 */
class LaravelTac extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Josuapsianturi\LaravelTac\LaravelTac::class;
    }
}
