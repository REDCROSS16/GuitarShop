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
}
