# singleton
The singleton design pattern is a creational design pattern which makes sure that you have one single instance of a particular class in the duration of your runtime, and provides a global point of access to the single instance.
---


# How to implement a singleton? 

- Make the default constructor private, to prevent other objects from using the new operator with the Singleton class.
- Create a static creation method that acts as a constructor. Under the hood, this method calls the private constructor to create an object and saves it in a static field. All following calls to this method return the cached object.


``` php 
<?php
class Session
{
    private static $instance;
     
    public static function getInstance()
    {
        if( is_null(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
     
    private function __construct() { }
     
    private function __clone() { }
     
    //  any other session methods we might use
    ...
    ...
    ...
}
 
// get a session instance
$session = Session::getInstance();
```


