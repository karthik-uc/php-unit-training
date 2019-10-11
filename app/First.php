<?php
namespace App;

class First
{

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
        
        $test = $second->helloWorld();
        if ($test == 'Hello World') {
            print "hello World" . PHP_EOL;
        } else {
            print "bye" . PHP_EOL;
        }
    }
}