<?php
    require_once 'pdo.php';

    /**
     * Thêm sản phẩm vào giỏ hàng người dùng, tăng số lượng nếu đã tồn tại trong giỏ hàng
     * 
     * @param int $product_id mã sản phẩm
     * @param int $product_quantity số lượng
     * @param int $product_price giá
     * @param int $user_id mã người dùng
     */
    function add_product_to_cart($product_id, $product_quantity, $user_id) {
        if (is_product_in_cart($product_id, $user_id)) {
            if ($product_quantity == 0) {
                $sql = "DELETE FROM cartdetail WHERE (ProductId = $product_id AND UserId = $user_id)";
                return pdo_execute($sql);
            }
            $sql = "UPDATE cartdetail SET Quantity = Quantity + $product_quantity WHERE (ProductId = $product_id AND UserId = $user_id)";
            return pdo_execute($sql);
        } else {
            $sql = "INSERT INTO cartdetail (Quantity, UserId, ProductId) VALUES (?, ?, ?)";
            return pdo_execute($sql, $product_quantity, $user_id, $product_id);
        }
        
    }
    function is_product_in_cart($product_id, $user_id) {
        $sql = "SELECT COUNT(*) FROM cartdetail WHERE (ProductId = $product_id AND UserId = $user_id)";
        return (pdo_query_value($sql) != 0);
    }

    /**
     * Lấy giỏ hàng của người dùng
     * 
     * @param int $user_id mã người dùng
     * 
     * @return array danh sách sản phẩm
     */
    function get_cart_by_user_id($user_id) {
        $sql = "SELECT cartdetail.ProductId as Id, cartdetail.Quantity, cartdetail.Price, cartdetail.UserId FROM cartdetail WHERE UserId = $user_id";
        return pdo_query($sql);
    }

    function clear_cart_by_user_id($user_id) {
        $sql = "DELETE FROM cartdetail WHERE UserId = $user_id";
        return pdo_execute($sql);
    }
?>
    
