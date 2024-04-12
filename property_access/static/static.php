<?php

class Counter 
{
  public static int $count = 1;

  public static function increaseCount($count)
  {
     return self::$count += $count++; 
  }
  
}

echo Counter::increaseCount(20);
