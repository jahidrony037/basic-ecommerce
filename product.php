<?php

class Product {
    public $id;
    public $name;
    public $price;
    public $description;

    public function __construct($id, $name, $price, $description){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
    }

    public static function getAllProduct(){
        $json= file_get_contents('products.json');
        $data= json_decode($json, true);

        $products = [];

        foreach($data as $item){
            $products[] = new Product($item['id'], $item['name'], $item['price'], $item['description']);
        }

        return $products;
    }

    
}


?>