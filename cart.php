<?php
class Cart {
    public function __construct(){
        if(!isSet($_SESSION['cart'])){
            $_SESSION['cart']=[];
        }
    }

    public function addProduct($productId){
        if(!isset($_SESSION(['cart'][$productId]))){
            $_SESSION['cart'][$productId]=1;

        }else {
            $_SESSION['cart'][$productId]++;
        }
    }

    public function removeProduct($productId) {
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }
    }

    public function getCartItems() {
        return $_SESSION['cart'];
    }

    public function clearCart() {
        $_SESSION['cart'] = [];
    }
}

