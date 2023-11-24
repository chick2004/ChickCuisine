<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $mail_used = false;
    $phonenumber_used = false;
    if (isset($_POST['submit'])) {
        if (get_user_by_email($email)) {
            $mail_used = true;
        }
        if (get_user_by_phonenumber($phonenumber)) {
            $phonenumber_used = true;
        }
        if($mail_used == false && $phonenumber_used == false) {
            insert_user($email, password_hash($password, PASSWORD_DEFAULT), $phonenumber, 1);
            $_SESSION['LOGGED_IN_USER_ID'] = get_user_id_by_email($email);
            header("location: ".$SITE_URL."/trangchu");
        }

    }
    $VIEW_NAME = "dangky/dangky.php";
    require '../layout.php';  
?>