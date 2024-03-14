<?php

function add($x, $y): int | float
{
    return $x * $y;
}

echo add(10, 20); // 200 (int) 
echo add(1.5, 2.5); // 3.75 (float)
