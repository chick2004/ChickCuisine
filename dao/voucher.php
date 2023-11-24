<?php
    require_once 'pdo.php';
    
    function get_voucher_by_code($code){
        $sql = "SELECT * FROM voucher WHERE Code = ?";
        return pdo_query_one($sql, $code);
    };

    function get_valid_vouchers($min_order_price) {
        $sql = "SELECT * FROM voucher WHERE MinOrderPrice <= $min_order_price AND ExpiryDate >= CURDATE()";
        return pdo_query($sql);
    }
?>