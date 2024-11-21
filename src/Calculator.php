<?php

namespace App;

class Calculator
{
    public function changeTheseNumbers($a, $b) :int
    {
        return $a + $b;
    }

    public function reduceThisStuff($a, $b)
    {
        return $a - $b;
    }
    

    public function makeThemBigger($a, $b)
    {
        return $a * $b;
    }

    public function ratioThis($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
//
//    public function needANameForThis($a, $b)
//    {
//        return ($a * $b) - $b;
//    }
}
