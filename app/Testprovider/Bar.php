<?php

namespace App\Testprovider;


class Bar implements IFoo
{
    public function __construct()
    {
        echo "Logic is changed<br>";
    }

    public function test()
    {
        echo "ssssss";

        return $this;
    }

    public function test2()
    {
        echo "ssssss2";

        return $this;
    }
}