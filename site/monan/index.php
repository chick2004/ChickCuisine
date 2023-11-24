<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    require '../../dao/comment.php';
    require '../../dao/user.php';
    if(!(isset($_GET['id']) || $_GET['id'])){ 
        header("location: site/trangchu");
    }
    $comments = get_comment_by_product_id($_GET['id']);
    $product = get_product_by_id($_GET['id']);
    $similar_products = get_similar_products_by_product_id($_GET['id'], 8, 1);
    $VIEW_NAME = "monan/monan.php";
    require '../layout.php';  
?>