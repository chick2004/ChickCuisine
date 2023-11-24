<?php
    require_once 'pdo.php';
    
    function insert_order($total_price, $note, $date, $status, $user_id) {
        $sql = "INSERT INTO `order` (TotalPrice, Note, Date, Status, UserId) VALUES (?, ?, ?, ?, ?)";
        return pdo_execute($sql, $total_price, $note, $date, $status, $user_id);
    }

    function insert_order_detail($quantity, $price, $order_id, $product_id) {
        if(get_order_by_id($order_id) != null) {
            $sql = "INSERT INTO orderdetail (Quantity, Price, OrderId, ProductId) VALUES (?, ?, ?, ?)";
            return pdo_execute($sql, $quantity, $price, $order_id, $product_id);
        }
    }

    function get_order_by_id($order_id) {
        $sql = "SELECT * FROM `order` WHERE Id = $order_id";
        return pdo_query_one($sql);
    }
?>