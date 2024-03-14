<?php

$siblings = ["ebi", "Yanate", "Kari"];
$developer = [
  'name' => 'Ekeopre Beredugo',
  'profession' => 'web develop'

];

foreach ($siblings as $sibling) :
echo "name $sibling \n" ;
endforeach;

// difference between foreach and for is that for can be used to reverse the order.
//You bcan do things with key and value when using foreach

foreach( $developer as $key => $value ):
echo "my details are $key and $value \n";
endforeach;




