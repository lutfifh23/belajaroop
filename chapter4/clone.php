<?php

class Product{
    public $color;

    public function __construct(){
        echo "New Product has created <br/>";
    }

    public function __clone(){
        echo "New Product has cloned <br/>";
    }
}

$shirt1 = new Product;
$shirt1->color = "blue <br/>";

$shirt2 = clone $shirt1;

echo $shirt1->color;
echo $shirt2->color;

echo "<hr/>";

$shirt2->color = "red <br/>";

echo $shirt1->color;
echo $shirt2->color;
?>