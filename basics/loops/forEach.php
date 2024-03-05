<?php

$siblings = ["ebi", "Yanate", "Karipre"];
$developer = [
  'name' => 'Ekeopre Beredugo',
  'profession' => 'web developer'

];

foreach ($siblings as $sibling) :
echo "name $sibling" . PHP_EOL;
endforeach;

// difference between foreach and for is that for can be used to reverse the order.
//You bcan do things with key and value when using foreach

foreach( $developer as $key => $value ):
echo "my details are $key and $value" . PHP_EOL;
endforeach;




