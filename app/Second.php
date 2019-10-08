<?php
namespace App;

class Second
{
    public function helloWorld()
    {
        return "Hello World";
    }

    public function helloName($name)
    {
        return "Hello {$name}";
    }
}