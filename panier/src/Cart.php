<?php

namespace App;

use App\Product;

class Cart{

    private  $products =  [];

    public function addProduct(Product $product)
    {
        if($product->getStock() > 0) {
            array_push($this->products, $product);
            $product->setStock($product->getStock() - 1);
            echo "Le produit a bien été ajouté" . PHP_EOL;
        }else{
            echo "Le produit n'est plus en stock" . PHP_EOL;
        }
    }

    public function removeProduit(Product $product)
    {
        if(($key = array_search($product, $this->products)) !== false) {
            unset($this->products[$key]);
            $product->setStock($product->getStock() + 1);
            echo "Le produit a bien été supprimé". PHP_EOL;
        }
    }

    public function listProducts(){
        if(empty($this->products)){
            echo "Le panier est vide";
    }else{
        foreach($this->products as $product){
            echo $product->getName() . " " . $product->getPrice() . "€" . PHP_EOL;
            }
        }
    }
}