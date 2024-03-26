<?php

namespace hofi\Test;

class Math
{

    public static function sum(array $values): int
    {
        $total = 0;
        foreach ($values as $values){
            $total += $values;
        }
        return $total;
    }
}

