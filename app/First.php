<?php
namespace App;

class First
{
    public function __construct()
    {
    }

    public function isTrue()
    {
        return true;
    }

    public function isFalse()
    {
        return false;
    }

    public function sayHello(Second $second)
    {
        $test = $second->helloName('World');
        if ($test == 'Hello World') {
            print 'hello World' . PHP_EOL;
        } else {
            print 'bye' . PHP_EOL;
        }
    }
}
