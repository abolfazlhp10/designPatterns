<?php

namespace App\DesignPatterns\Facade;

abstract class Facade
{
    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $instance = app()->make(static::getFacadeAccessor());

        return $instance->$name(...$arguments);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    abstract protected static function getFacadeAccessor(): string;
}
