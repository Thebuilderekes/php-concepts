<?php
require_once 'type-hinting.php';

 declare(string_type=1);

//even with type hinting some times php default behaviour will coerce integer argument to string. to avoid this 

// use declare(string_type=1) at the top of your code.

$love_yours = new Song("love yours", "hello");

var_dump($love_yours);;




