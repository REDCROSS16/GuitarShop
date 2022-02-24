<?php
    session_start();
    require_once 'db/db.php';
    require_once 'classes/Helper.php';
    require_once 'classes/Products.php';

    $helper = new Helper();
    $product = new Products();
    $products = $product->getProducts();
//    $helper->debug($products->getProducts());
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Guitar Shop</title>
    <link rel="shortcut icon" href="assets/icons/guitar.ico" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top d-flex justify-content-between">

    <div>
        <a class="navbar-brand pretty" href="index.php">GuitarShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Гитары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Гитарное оборудование</a>
                </li>
            </ul>
        </div>
    </div>

    <div>
        <form class="form-inline d-f center">
            <input class="form-control mr-sm-2" type="search" placeholder="Введите название" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>

    <div>
        <button type="button" class="btn btn-dark shopping-cart" data-toggle="modal" data-target="#cart-modal">
            <svg enable-background="new 0 0 128 128" id="Layer_1" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="89" cy="101" fill="none" r="8" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4"/><circle cx="49" cy="101" fill="none" r="8" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4"/><path d="  M29,33h83.0800705c2.8071136,0,4.7410736,2.8159065,3.7333832,5.4359169L99.8765564,79.8718338  C98.6882782,82.9613724,95.7199707,85,92.4097977,85H45.6081238c-3.8357391,0-7.1316795-2.722496-7.8560524-6.4892197L29,33z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4"/><path d="  M28.9455147,33.0107765l-1.5162468-7.5799599C26.6812878,21.6915436,23.3980236,19,19.5846729,19h-7.2409086" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4"/><line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" x1="89.9039841" x2="92.9041901" y1="45" y2="45"/><line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" x1="32" x2="80.9041901" y1="45" y2="45"/>
            </svg>
            Корзина <span class="badge badge-light">3</span>
        </button>
    </div>

</nav>

<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php if (!empty($products)):?>
                <?php foreach ($products as $product):?>
                    <div class="product-card">
                        <div class="offer">
                            <?php if($product['hit']):?>
                                <div class="offer-hit">Hit</div>
                            <?php endif;?>
                            <?php if($product['sale']):?>
                                <div class="offer-sale">Sale</div>
                            <?php endif;?>
                        </div>
                        <div class="card-thumb">
                            <a href="#"><img src="img/<?=$product['img'];?>" alt="<?php $product['title'];?>"></a>
                        </div>
                        <div class="card-caption">
                            <div class="card-title">
                                <a href="#"><?=$product['title'];?></a>
                            </div>
                            <div class="card-price text-center">
                                <?php if ($product['old_price']): ?>
                                    <del><?=$product['old_price'];?> руб. </del>
                                <?php endif;?>
                                <?=$product['price'];?> руб.
                            </div>
                            <a href="?cart=add&id=<?=$product['id'];?>" class="btn btn-danger btn-block add-to-cart" data-id="<?=$product['id'];?>">
                                <i class="fas fa-cart-arrow-down"></i> Купить
                            </a>
                            <div class="item-status">
                                <i class="far fa-pause-circle text-danger"></i> Ожидается
                            </div>
                        </div>
                    </div><!-- /product-card -->
                <?php endforeach;?>
                <?php endif;?>
            </div><!-- /product-cards -->

        </div><!-- /row -->

        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div><!-- /row -->

    </div><!-- /container -->
</div><!-- /wrapper -->

<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="product.html"><img src="img/1.jpg" alt="CORT AD810M Акустическая гитара"></a></td>
                        <td><a href="product.html">CORT AD810M Акустическая гитара</a></td>
                        <td>2 799</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><a href="product.html"><img src="img/2.jpg" alt="Crafter D6/N Акустическая гитара"></a></td>
                        <td><a href="product.html">Crafter D6/N Акустическая гитара</a></td>
                        <td>12 626</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td colspan="4" align="right">Товаров: 3 <br> Сумма: 28 051 грн.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Оформить заказ</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
