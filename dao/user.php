<?php
    require_once 'pdo.php';

    /**
     * Lấy người dùng theo id
     * 
     * @param int $user_id mã người dùng
     * 
     * @return mixed 1 người dùng
     */
    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM user WHERE Id = $user_id";
        return pdo_query_one($sql);
    }

    
    function get_user_by_phonenumber($phonenumber) {
        $sql = "SELECT * FROM user WHERE PhoneNumber = ?";
        return pdo_query_one($sql, $phonenumber);
    }

    function get_user_by_email($email) {
        $sql = "SELECT * FROM user WHERE Email = ?";
        return pdo_query_one($sql,$email);
    }

    function get_user_id_by_email($email) {
        $sql = "SELECT user.Id FROM user WHERE Email = ?";
        return pdo_query_value($sql, $email);
    }


    function insert_user($email, $password, $phonenumber, $role) {
        $sql = "INSERT INTO user (Email, Password, PhoneNumber, Role) VALUES (?, ?, ?, ?)";
        return pdo_execute($sql, $email, $password, $phonenumber, $role);
    }
?>