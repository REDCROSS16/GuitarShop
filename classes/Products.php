<?php

class Products
{
    public function __construct()
    {

    }

    public function getProducts()
    {
        global $pdo;
        $all = $pdo->query('SELECT * FROM products');
        return $all->fetchAll();
    }


    public function getProduct($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function addToCart($product): void
    {

        if (isset($_SESSION['cart'][$product['id']])) {
            $_SESSION['cart'][$product['id']]['qty'] += 1;
        } else {
            $_SESSION['cart'][$product['id']] = [
              'title' =>   $product['title'],
              'slug'  =>   $product['slug'],
              'price' =>   $product['price'],
              'qty'   =>   1,
              'img'   =>   $product['img'],
            ];
        }
        // добавление количества товаров
        $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
        $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? ++$_SESSION['cart.sum'] + $product['price'] : $product['price'];
    }
}
