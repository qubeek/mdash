<?php

namespace qubeek\mdash\Facades;

use Illuminate\Support\Facades\Facade;
use qubeek\mdash\EMTypograph;

class Mdash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return EMTypograph::class;
    }
}
