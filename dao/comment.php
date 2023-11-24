<?php
    require_once 'pdo.php';

    /**
     * Lấy bình luận của sản phẩm
     * 
     * @param int $product_id mã sản phẩm
     * 
     * @return danh sách bình luận
     */
    function get_comment_by_product_id($product_id) {
        $sql = "SELECT * FROM comment WHERE ProductId = $product_id";
        return pdo_query($sql);
    }
?>