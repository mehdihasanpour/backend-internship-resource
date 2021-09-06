<?php

//A singleton pattern is used when we want for there to only ever be a single instance of an object. Any attempts to duplicate, or to instantiate additional instances of the class should fail
class Singleton
{
    // Hold the class instance.
    private static $instance = null;

    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
        
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}