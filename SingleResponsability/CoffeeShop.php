<?php

namespace App;

class CoffeeShop{
    protected $products=[];

    public function addProducts($products=[]){
        $this->products=$products;
    }

    public function getProducts(){
        return $this->products;
    }

    public function removeProduct($id){
        //Logica para borrar producto
    }

}
