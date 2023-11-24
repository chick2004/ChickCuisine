<?php
    require '../../global.php';
    require '../../dao/voucher.php';
    extract($_REQUEST);
    if(isset($order_price)) {
        $vouchers = get_valid_vouchers($order_price);
        $vouchers_list_html = "";
        foreach($vouchers as $voucher) {
            extract($voucher);
            $vouchers_list_html .= '
            <div class="voucher" onclick="select_voucher(\''.$Code.'\')">
                <p class="code">'.$Code.'</p>';
            if ($DiscountPrice != 0) {
                $vouchers_list_html .= '<p class="discount">giảm '.number_format($DiscountPrice, 0, ".", ".").' vnđ</p>';
            } else {
                $vouchers_list_html .= '<p class="discount">giảm '.$DiscountPercentage.' %</p>';
            }
            $vouchers_list_html .= '
            </div>
            ';
        }
        echo $vouchers_list_html;
    }
    if (isset($voucher_code)) {
        $voucher = get_voucher_by_code($voucher_code);
        if ($voucher == null) {
            echo "0";
        } else {
            extract($voucher);
            if ($DiscountPrice != 0) {
                echo $DiscountPrice.=" vnđ";
            } else {
                echo $DiscountPercentage.=" %";
            }
        }
    }
?>