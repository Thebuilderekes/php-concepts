<?php

//associative array
$myDetails = [
  "name" => "Ekeopre",
  "occupation" => "Web developer",
  "age" =>  33
];

foreach ($myDetails as $key => $value) {
     
  echo "$key => $value" . PHP_EOL;
  # code...
}

//you access this array items using the keys
//you cannot put an associative array inside quoted string
$myDetails["hobbies"] = ["coding", "writing", "freelance photography"] ;

echo "{$myDetails["occupation"]}" . PHP_EOL;
print_r($myDetails);


