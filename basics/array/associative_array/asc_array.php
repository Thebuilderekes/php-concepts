<?php

//associative array
$myDetails = [
  "name" => "Ekeopre",
  "occupation" => "Web developer",
  "age" =>  33
];

//you access this array items using the keys
//you cannot put an associative array inside quoted string
$myDetails["hobbies"] = ["coding", "writing", "freelance photography"] ;

echo "{$myDetails["occupation"]}" . PHP_EOL;
print_r($myDetails);


