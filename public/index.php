<?php

use app\Classes\Product;

include 'autoloader.php';


$product1 = new Product(1, "T-Shirt", 19.99);
$product1->showDetails();

$product2 = new Product(2, "Polo Shirt", 20.00);
$product2->showDetails();