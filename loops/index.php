<?php

$count = 4;

// while($count < 10){
//     ++$count;
//     if( $count % 2){
//         continue;
//     }
//     echo "$count" . '<br>';
       
// }

// echo "=====do while loop";
//in the do while loop, the loop runs at least once whether or not the condition is satified

// do {
// 
//     $count++;
//     echo "=====do while loop" . '<br>';
// 
//     echo "$count";
// 
// } while ($count < 2);
// 

$siblings = ["ebi", "Yanate", "Karipre"];

// $siblingsLength = count($siblings);
// 
// for ($i = 0; $i < $siblingsLength; $i++ ) {
//   echo "<li>$siblings[$i]</li>";
// }

foreach ($siblings as $sibling) :
 echo "name is $sibling <br>";
endforeach;

