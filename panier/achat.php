<?php

require_once('vendor/autoload.php');

use App\Cart;
use App\Product;

$panier = new Cart();

$produit1 = (new Product())->setName("Produit 1");
$produit2 = (new Product())->setName("Produit 2");
$produit3 = (new Product())->setName("Produit 3");


$panier->addProduct($produit1);
dump($panier);
echo $panier->listProducts();
$panier->removeProduit($produit1);
echo $panier->listProducts();