<?php
    require_once 'pdo.php';

    /**
     * Lấy danh sách danh mục
     * 
     * @param int $limit giới hạn số danh mục, lấy tất cả nếu không sử dụng
     * 
     * @return array danh sách danh mục
     */
    function get_categories($limit = null) {
        $sql = "SELECT * FROM category".($limit == null ? "" : " LIMIT $limit");
        return pdo_query($sql);
    }

    /**
     * Lấy danh sách danh mục hot, dựa trên tổng lượt xem của tổng sản phẩm của danh mục
     * 
     * @param int $limit giới hạn số danh mục, lấy tất cả nếu không sử dụng
     * 
     * @return array danh sách danh mục hot
     */
    function get_hot_categories($limit = null) {       
        $sql = "SELECT category.Id, category.Name, category.Image, SUM(product.Views) as total_views FROM product JOIN category on product.CategoryId = category.Id GROUP BY category.Id ORDER BY total_views DESC".($limit == null ? "" : " LIMIT $limit");
        return pdo_query($sql);
    }

    /**
     * Lấy số lượng sản phẩm của danh mục
     * 
     * @param int $category_id mã danh mục
     * 
     * @return int số lượng sản phẩm
     */
    function get_product_count_by_category_id($category_id) {
        $sql = "SELECT COUNT(product.Id) FROM product WHERE CategoryId = $category_id GROUP BY product.CategoryId";
        return pdo_query_value($sql);
    }

    /**
     * Lấy danh mục của sản phẩm
     * 
     * @param int $product_id mã sản phẩm
     * 
     * @return array 1 danh mục
     */
    function get_category_by_product_id($product_id) {
        $sql = "SELECT category.* FROM product INNER JOIN category ON product.CategoryId = category.Id WHERE product.Id = $product_id";
        return pdo_query_one($sql);
    }

















    // function get_category_by_id($id) {
    //     $sql = "SELECT * FROM category WHERE Id = $id";
    //     return pdo_query_one($sql);
    // }

    // function get_category_name_by_product_id($id) {
    //     $category = get_category_by_product_id($id);
    //     return $category["Name"];
    // }
?>
