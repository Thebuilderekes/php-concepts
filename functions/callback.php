<?php
function add($a, $b) {
    return $a + $b;
}

$result = call_user_func('add', 2, 3);

echo "$result";
//call_user_func(): Calls a user-defined function.
