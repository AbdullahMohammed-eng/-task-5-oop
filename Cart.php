<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Cart {
    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function add($productId, $productData) {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$productId] = [
                'name' => $productData['name'],
                'price' => $productData['price'],
                'quantity' => 1
            ];
        }
    }

    public function getCart() {
        return $_SESSION['cart'];
    }
}

?>