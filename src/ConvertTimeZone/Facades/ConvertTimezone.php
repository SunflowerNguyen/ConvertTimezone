<?php
namespace DuyVuSeldat\ConvertTimeZone\Facades;

use Illuminate\Support\Facades\Facade;

class ConvertTimezone extends Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'convert-timezone';
    }
}