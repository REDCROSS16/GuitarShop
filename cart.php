<?php

session_start();
require_once 'db/db.php';
require_once 'classes/Helper.php';
require_once 'classes/Products.php';

$products = new Products();

if (isset($_GET['cart'])) {
    switch ($_GET['cart']) {
        case 'add':
            $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
            $product = $products->getProduct($id);
            if (!$product) {
                echo json_encode(['code'=> 'error', 'response' =>  'Error product']);
            } else {
                $products->addToCart($product);
                ob_start();
                require 'cart-modal.php';
                $cart = ob_get_clean();

                echo json_encode(['code'=> 'ok', 'response' =>  $cart]);
            }
            break;
        case 'show':
            require 'cart-modal.php';
            break;
    }
}