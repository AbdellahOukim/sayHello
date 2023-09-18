<?php

namespace Abdo\sayHello;



class Hello
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function sayHello()
    {
        return "hello i'm " . $this->name;
    }
}
