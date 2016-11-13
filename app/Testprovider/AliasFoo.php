<?php

namespace App\Testprovider;


use Illuminate\Support\Facades\Facade;

class AliasFoo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Testprovider\IFoo::class; // app('foo')
    }
}