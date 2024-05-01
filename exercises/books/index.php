
 <?php
    $books = [
        [
            "name" => "the sun runs",
            "author" => "ekeopre",
            "purchaseUrl" => "example.com",
        ],

        [
            "name" => "the PHP king",
            "author" => "john",
            "purchaseUrl" => "example.com",
        ],
        [
            "name" => "money",
            "author" => "john",
            "purchaseUrl" => "example.com",
        ],
        [
            "name" => "the sun runs faster",
            "author" => "ekeopre",
            "purchaseUrl" => "example.com",
        ],
    ];

    function filter($items, $fn)
    {
        $filtered = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filtered[] = $item;
            }
        }
        return $filtered;
    }

    $filterByNameLength = filter($books, function ($book) {
        return strlen($book["name"]) > 5;
    });
 
 
 require "index.view.php"
 ?>


