<?php

require_once "data/Product.php";


$product = new Product("Apple", 10000);
//  echo $product->price; //eror karena error di private
