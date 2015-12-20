<?php

namespace Phpatterns\Creational\Singleton;

/**
* Logger used as a Singleton
*
* 'final' keyword used to prevent from creating subclasses (be sure to keep only one instance of the Logger)
*
*/
final class Logger
{
    private static $instance = null;

    /**
    * Creates the Logger instance at the first call and then always returns
    * the same instance
    */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
    * Prevent from creating object directly
    */
    private function __construct()
    {

    }

    /**
    * Prevent from cloning object
    */
    private function __clone()
    {

    }

    /**
    * Prevent from being serialized
    */
    private function __sleep()
    {

    }

    /**
    * Prevent from being unserialized
    */
    private function __wakeup()
    {

    }
}
