<?php

namespace App\Testprovider;


class Foo implements IFoo
{
    public function __construct($a, $b)
    {
        echo "{$a}-{$b}<br>";
    }

    public function test()
    {
        echo "TEst";
        
        return $this;
    }

    public function test2()
    {
        echo "test2";
        
        return $this;
    }
}