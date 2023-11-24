<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    $hot_products = get_hot_products(8);
    $discount_products = get_discount_products(8);
    $hot_categories = get_hot_categories(6);
    $VIEW_NAME = "trangchu/trangchu.php";
    require '../layout.php';  
?>