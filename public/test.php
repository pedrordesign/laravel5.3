<?php
use CodeEducation\Cart\Cart;
use CodeEducation\Cart\ProductX;


require_once ('../vendor/autoload.php');

$productX = new ProductX();
$cart = new Cart();

$cart->addProduct($productX);

//echo $cart->getTotal();

print_r($cart->getItems());