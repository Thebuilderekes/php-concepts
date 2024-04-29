<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Books app</title>
</head>
<body>
    <?php
        $books = [
                    [
                            'name' => "the sun runs",
                            'author'=> "ekeopre",
                            'purchaseUrl'=> 'example.com'
                    ],

                    [
                            'name' => "the PHP king",
                            'author'=> "john",
                            'purchaseUrl'=> 'example.com'
                    ],
                    [
                            'name' => "money van",
                            'author'=> "john",
                            'purchaseUrl'=> 'example.com'
                    ],
                    [
                            'name' => "the sun runs",
                            'author'=> "ekeopre",
                            'purchaseUrl'=> 'example.com'
                    ],
                ];

                function filter($items, $key, $value){
                     $filteredItem = [];
                    foreach($items as $item ){
                      if( $item[$key] === $value ){
                        $filteredItem[] = $item;                        
                    
                      }

                    }
                   return $filteredItem;
                };

                  
             $filteredByAuthor = filter($books, "author", "john");
             $filteredByName= filter($books, "name", "the sun runs");


          ?>
          <ul>
             <?php foreach($filteredByAuthor as $book ):  ?>
                <li>authors:  <?= $book['author'];?>  </li>
             <?php endforeach; ?>

            
          </ul>
            <ul>

             <?php foreach($filteredByAuthor as $book ):  ?>
                <li> <?= $book['name'];?> </li>
             <?php endforeach; ?>
            </ul> 
</body>
</html>