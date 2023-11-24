<?php
    require '../../global.php';
    require '../../dao/product.php';
    require '../../dao/category.php';
    extract($_REQUEST);
    $hot_categories = get_hot_categories(3);
    $categories = get_categories(null);

    $filter_by_category = isset($category_id) ? $category_id : null;
    $filter_by_keyword = isset($search) ? $search : null;
    $filter_by_min_price = isset($min_price) ? $min_price : null;
    $filter_by_max_price = isset($max_price) ? $max_price : null;
    $filter_by_discount = isset($is_discount) ? ($is_discount == "true" ? true : false) : false;
    $page = isset($page) ? $page : 1;
    $limit = 9;
    $sort = isset($sort_by) ? $sort_by : null;
    $products = get_product_by_filter($filter_by_category, $filter_by_keyword, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, $limit, $page, $sort);
    $total_products = get_product_by_filter($filter_by_category, $filter_by_keyword, $filter_by_min_price, $filter_by_max_price, $filter_by_discount, null, null, $sort);
    $total_products_count = count($total_products);
    
    $VIEW_NAME = "thucdon/thucdon.php";
    require '../layout.php';  
?>