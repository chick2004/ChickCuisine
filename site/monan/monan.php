<!-- css trang -->
<style>
    main {
        padding: 0px 100px;
    }
    .detail-product {
        display: grid;
        width: 100%;
        margin: 50px auto;
        grid-template-columns: 670px auto;
        gap: 10px 50px;
        height: fit-content;
    }
    .detail-product .product-image {
        grid-column: 1 / 2;
        grid-row: 1 / 9;
        width: 100%;
        border-radius: 10px;
    }
    .detail-product .product-path {
        color: #289FD3;
    }
    .detail-product .product-line {
        border-bottom: 1px solid var(--gray);
        width: 100%;
        height: 1px;
    }
    .detail-product .product-name {
        font-size: 30px;
        font-weight: bold;
    }
    .detail-product .product-description {
        color: var(--lightblack);
        line-height: 30px;
        text-align: justify;
    }
    .detail-product .product-rating {
        color: var(--yellow);
        font-size: 20px;
    }
    .detail-product .product-rating span {
        color: var(--lightblack);
    }
    .detail-product .product-price {

    }
    .detail-product .product-original-price {
        text-decoration: line-through;
        color: var(--gray);
        font-size: 24px;
        font-weight: 600;
    }
    .detail-product .product-discount-price {
        color: var(--red);
        font-size: 36px;
        font-weight: 600;
    }
    .detail-product .product-buttons {
        width: 100%;
        text-align: right;
    }
    .detail-product .product-buttons>* {
        display: inline-block;
    }
    .detail-product .product-buttons .buttons-quantity {
        margin-right: 30px;
    }
    .detail-product .product-buttons .buttons-quantity>* {
        display: inline-flex;
        vertical-align: middle;
        font-size: 20px;
        font-weight: 600;
        width: 38px;
        height: 38px;
        border-radius: 5px;
        justify-content: center;
        align-items: center;
    }
    .detail-product .product-buttons .buttons-quantity>:not(:nth-child(2)) {
        background-color: var(--red);
        color: white;
    }
    .detail-product .product-buttons .button-addtocart {
        background-color: var(--red);
        padding: 5px 10px;
        border-radius: 5px;
        width: fit-content;
        height: 38px;
    }
    .detail-product .product-buttons .button-addtocart>* {
        display: inline-block;
        vertical-align: middle;
        color: white;
        font-size: 18px;
        font-weight: 600;
        margin: 0px 5px;
    }
    .title {
        text-align: center;
        color: var(--red);
        font-weight: 600;
        font-size: 32px;
        margin: 30px 0px;
    }
    .comment-box {
        width: 100%;
        margin: 50px auto;
        display: grid;
        grid-template-columns: 90% 10%;
        grid-template-rows: auto 60px;
        gap: 10px;
    }
    .comment-box .comments {
        width: 100%;
        overflow-y: scroll;
        height: 500px;
        justify-content: space-between;
    }
    .comment-box .column {
        column-count: 2;
        column-gap: 10px;
    }
    .comment-box .comments .comment {
        width: 1fr;
        height: fit-content;
        margin-bottom: 20px;
        background-color: white;
        border: 1px solid var(--gray);
        border-radius: 10px;
        overflow: hidden;
        padding: 5px;
        display: grid;
        grid-template-columns: 70px auto;
    }
    .comment-box .comments .comment .left {
        padding: 10px;
        grid-column: 1 / 2;
    }
    .comment .user-avatar {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-color: var(--lightgray);
    }
    .comment-box .comments .comment .right {
        padding: 10px;
        grid-column: 2 / 3;
    }
    .comment .user-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .comment .time {
        color: var(--lightblack);
        font-weight: lighter;
    }
    .comment .rating {
        color: var(--yellow);
        font-size: 18px;
        margin: 10px 0px;
    }
    .comment .content {
        color: var(--lightblack);
        font-size: 15px;
    }
    .filter-box {
        width: 100%;
        text-align: center;
        padding: 10px 0px;
    }
    .filter-box label {
        cursor: pointer;
    }
    .filter-box>div:first-child>* {
        display: inline-block;
        vertical-align: middle;
        margin-bottom: 20px;
    }
    .filter-box>div:first-child>p {
        font-size: 20px;
    }
    .filter-box>div:not(.filter-box>div:first-child) {
        width: 100%;
        text-align: left;
        padding-left: 20px;
        margin: 5px 0px;
    }
    .user-comment-form {
        width: 1fr;
        height: 40px;
        display: grid;
        gap: 20px;
        grid-template-columns: 200px auto;
        align-self: flex-end;
    }
    .user-comment-form .stars {
        align-self: center;
        display: flex;
        justify-content: space-between;
    }
    .user-comment-form .stars svg:hover path {
        cursor: pointer;
    }
    .user-comment-form .comment-form {
        width: 1fr;
        position: relative;
    }
    .user-comment-form .comment-form input {
        width: calc(100% - 15px);
        height: 40px;
        border: 1px solid var(--gray);
        border-radius: 10px;
        padding-left: 20px;
        outline: none;
    }
    .user-comment-form .comment-form input::placeholder {
        font-size: 13px;
        font-weight: 400;
    }
    .user-comment-form .comment-form svg {
        position: absolute;
        right: 35px;
        top: 50%;
        transform: translate(0px, -50%);
    }
    .container {
        width: 100%;
        margin: 10px 0px;
    }
    .container-title {
        width: 100%;
        text-align: center;
        margin: 80px 0px 50px;
    }
    .container-title p:first-child {
        color: var(--red);
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .container-title p:last-child {
        font-size: 20px;
        font-weight: 400;
    }
    .container .list-products {
        width: 100%;
        display: inline-grid;
        grid-template-columns: repeat(4, 1fr);
    }
    .container .product {
        justify-self: center;
        position: relative;
        width: 260px;
        padding: 10px;
        margin: 15px 0px;
    }
    .container .product .product-image {
        width: 100%;
        height: 150px;
        margin-bottom: 10px;
    }
    .container .product .product-name {
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        color: var(--lightblack);
    }
    .product .product-rating {
            text-align: center;
            margin-bottom: 10px;
            height: 22px;
        }
    .container .product .product-description {
        text-align: center;
        font-size: 14px;
        font-weight: 400;
        color: var(--lightblack);
        margin-bottom: 10px;
    }
    .container .product .product-price {
        width: 100%;
        text-align: center;
    }
    .container .product .product-price>* {
        display: inline-block;
    }
    .container .product .product-price .original-price {
        text-decoration: line-through;
    }
    .container .product .product-price .discount-price {
        color: var(--red);
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 10px;
    }
    .container .product .product-buttons {
        display: grid;
        grid-template-columns:  auto 30px 30px;
        gap: 10px;
    }
    .container .product .product-buttons button {
        height: 30px;
        color: white;
        font-size: 15px;
        font-weight: 600;
        background-color: var(--red);
        border: none;
        border-radius: 5px;
    }
    .container .product .product-buttons button:first-child {
        width: 100%;
    }
    .container .product .product-buttons button:last-child {
        background-color: var(--black);
    }
    .container .product .product-buttons>:not(button:first-child) {
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container .product .product-discount-tag {
        position: absolute;
        top: -10px;
        right: 20px;
    }
    .container .product .product-discount-tag p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -80%);
        font-size: 16px;
        font-weight: 600;
        color: white;
    }
</style>
<main>
    <div class="detail-product">
        <?php extract($product) ?>
        <img class="product-image" src="<?=$IMAGE_DIR?>/<?=$Image?>" alt="">
        <div class="product-path">
            <?php $category_product = get_category_by_product_id($Id)?>
            <?=$category_product['Name']?> > <?=$Name?>
        </div>
        <div class="product-line"></div>
        <div class="product-name"><?=$Name?></div>
        <div class="product-description">
            <?=$Description?>
        </div>
        <div class="product-rating">
            <?=str_repeat('
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                </svg>
                ', ceil($Rating))?>
            <span>
                <?php if(get_product_rating_count($Id) != null) {?>
                    (<?=get_product_rating_count($Id)?>) lượt đánh giá
                <?php } else {?>
                    Chưa có lượt đánh giá
                <?php } ?>
            </span>
        </div>
        <div class="product-price">
            <?php if($Discount > 0) {?>
                <p class="product-original-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
                <p class="product-discount-price"><?=number_format($Price * (100 - $Discount) / 100, 0, '.', '.')?> vnđ</p>
            <?php } else {?>
                <p class="product-discount-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
            <?php } ?>
        </div>
        <div class="product-buttons">
            <div class="buttons-quantity">
                <button onclick="changeQuantity(-1)" id="decrease-button">-</button>
                <p class="product-quantity" id="product-quantity">1</p>
                <button onclick="changeQuantity(1)">+</button>
            </div>
            <button class="button-addtocart">
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.851191 0C0.381095 0 0 0.368234 0 0.822466C0 1.2767 0.381095 1.64493 0.851191 1.64493H1.26947C1.6495 1.64493 1.9835 1.88836 2.0879 2.24145L4.78713 11.3699C5.10033 12.4292 6.10232 13.1595 7.24244 13.1595H15.0201C16.0642 13.1595 17.0032 12.5452 17.391 11.6084L19.9008 5.54571C20.348 4.46522 19.5244 3.28986 18.3202 3.28986H4.16842L3.72478 1.78955C3.41157 0.7303 2.40958 0 1.26947 0H0.851191Z" fill="white"/>
                    <path d="M7.66075 19.7391C9.07105 19.7391 10.2143 18.6344 10.2143 17.2717C10.2143 15.9091 9.07105 14.8043 7.66075 14.8043C6.25045 14.8043 5.10718 15.9091 5.10718 17.2717C5.10718 18.6344 6.25045 19.7391 7.66075 19.7391Z" fill="white"/>
                    <path d="M14.4702 19.7391C15.8805 19.7391 17.0238 18.6344 17.0238 17.2717C17.0238 15.9091 15.8805 14.8043 14.4702 14.8043C13.0599 14.8043 11.9166 15.9091 11.9166 17.2717C11.9166 18.6344 13.0599 19.7391 14.4702 19.7391Z" fill="white"/>
                </svg>                    
                <p>Thêm vào giỏ hàng</p>
            </button>
        </div>
    </div>
    
    <div class="line"></div>
    <div class="title">Đánh giá món ăn</div>
    <div class="comment-box">
        <div class="comments" style="grid-column: 1 / 2; grid-row: 1 / 2;">
            <div class="column">
                <?php foreach($comments as $comment) { extract($comment); ?>
                    <div class="comment">
                        <?php $user = get_user_by_id($UserId); extract($user); ?>
                        <div class="left">
                            <img class="user-avatar" src="<?=$IMAGE_DIR?>/<?=$Avatar?>" alt="">
                        </div>
                        <div class="right">
                            <p class="user-name"><?=$Name?></p>
                            <p class="time"><?=$Time?></p>
                            <p class="rating">
                            <?=str_repeat('
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                                    </svg>
                                    ', ceil($Rating))?>
                            </p>
                            <p class="content">"<?php nl2br($Content) ?>"</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <form class="filter-box" style="grid-column: 2 / 3; grid-row: 1 / 2;">
            <div>
                <p>Lọc</p>
                <img src="image/icon/filter.png" alt="">
            </div>
            <div>
                <input type="radio" name="filter" id="filter-all">
                <label for="filter-all">Tất cả</label>
            </div>
            <div>
                <input type="radio" name="filter" id="filter-5">
                <label for="filter-5">5
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                    </svg>
                </label>
            </div>
            
            <div>
                <input type="radio" name="filter" id="filter-4">
                <label for="filter-4">4                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                    </svg>
                </label>
            </div>
            
            <div>
                <input type="radio" name="filter" id="filter-3">
                <label for="filter-3">3                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                    </svg>
                </label>
            </div>
            
            <div>
                <input type="radio" name="filter" id="filter-2">
                <label for="filter-2">2                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                    </svg>
                </label>
            </div>
            
            <div>
                <input type="radio" name="filter" id="filter-1">
                <label for="filter-1">1                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                    </svg>
                </label>
            </div>
        </form>
        <form class="user-comment-form"  style="grid-column: 1 / 2; grid-row: 2 / 3;">
            <div class="stars">
                <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#BDBDBD"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#BDBDBD"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#BDBDBD"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#BDBDBD"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#BDBDBD"/>
                </svg>
            </div>
            <div class="comment-form">
                <input type="text" placeholder="Để lại bình luận">
                <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.36708 15.92L18.4068 8.86742C19.1977 8.53743 19.1977 7.46257 18.4068 7.13257L1.36708 0.0800295C0.722601 -0.193398 0.00976486 0.268601 0.00976486 0.938027L0 5.28458C0 5.75601 0.3613 6.16144 0.849544 6.21801L14.6473 8L0.849544 9.77256C0.3613 9.83856 0 10.244 0 10.7154L0.00976486 15.062C0.00976486 15.7314 0.722601 16.1934 1.36708 15.92Z" fill="#C34439"/>
                </svg>
                    
            </div>
        </form>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="container-title">
            <p>Món ăn tương tự</p>
            <p>Danh sách các món ăn cùng loại</p>
        </div>
        <div class="list-products">
            <?php foreach($similar_products as $product) {extract($product);?>
                <a class="product whitediv" href="<?=$SITE_URL?>/monan?id=<?=$Id?>">
                    <img class="product-image" src="<?=$IMAGE_DIR?>/<?=$Image?>" alt="">
                    <?php if(strlen($Name) >= 15) {
                        $Name = mb_substr($Name, 0, 12, 'UTF-8')."...";
                    } ?>
                    <p class="product-name">
                        <?=$Name?>
                    </p>
                    <p class="product-rating">
                        <?=str_repeat('
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.50637 0.587923C5.88359 -0.195976 6.97352 -0.195973 7.35076 0.587923L8.77987 3.55771L11.9755 4.03395C12.8191 4.15964 13.1559 5.22275 12.5454 5.83294L10.2331 8.14459L10.7789 11.4087C10.923 12.2703 10.0413 12.9273 9.28679 12.5206L6.42857 10.9794L3.57033 12.5206C2.81586 12.9273 1.93409 12.2703 2.07818 11.4087L2.62405 8.14459L0.311682 5.83294C-0.298681 5.22275 0.0381291 4.15964 0.881643 4.03395L4.07725 3.55771L5.50637 0.587923Z" fill="#FFB11B"/>
                                </svg>
                                ', ceil($Rating))?>
                    </p>
                    <?php if(strlen($Description) >= 80) {
                        $Description = mb_substr($Description, 0, 77, 'UTF-8')."...";
                    } ?>
                        <p class="product-description">
                            <?=$Description?>
                        </p>
                        <div class="product-price">
                        <?php if($Discount > 0) {?>
                            <p class="original-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
                            <p class="discount-price"><?=number_format($Price * (100 - $Discount) / 100, 0, '.', '.')?> vnđ</p>
                        <?php } else {?>
                            <p class="discount-price"><?=number_format($Price, 0, '.', '.')?> vnđ</p>
                        <?php } ?>
                    </div>
                    <div class="product-buttons">
                        <button class="buy-now">Mua ngay</button>
                        <button class="add-to-cart">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.851191 0C0.381095 0 0 0.368234 0 0.822466C0 1.2767 0.381095 1.64493 0.851191 1.64493H1.26947C1.6495 1.64493 1.9835 1.88836 2.0879 2.24145L4.78713 11.3699C5.10033 12.4292 6.10232 13.1595 7.24244 13.1595H15.0201C16.0642 13.1595 17.0032 12.5452 17.391 11.6084L19.9008 5.54571C20.348 4.46522 19.5244 3.28986 18.3202 3.28986H4.16842L3.72478 1.78955C3.41157 0.7303 2.40958 0 1.26947 0H0.851191Z" fill="white"/>
                            <path d="M7.66075 19.7391C9.07105 19.7391 10.2143 18.6344 10.2143 17.2717C10.2143 15.9091 9.07105 14.8043 7.66075 14.8043C6.25045 14.8043 5.10718 15.9091 5.10718 17.2717C5.10718 18.6344 6.25045 19.7391 7.66075 19.7391Z" fill="white"/>
                            <path d="M14.4702 19.7391C15.8805 19.7391 17.0238 18.6344 17.0238 17.2717C17.0238 15.9091 15.8805 14.8043 14.4702 14.8043C13.0599 14.8043 11.9166 15.9091 11.9166 17.2717C11.9166 18.6344 13.0599 19.7391 14.4702 19.7391Z" fill="white"/>
                            </svg>
                        </button>
                        <button class="share">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 2.67857C16 4.1579 14.7208 5.35714 13.1429 5.35714C12.2302 5.35714 11.4175 4.95599 10.8944 4.33152L5.61723 6.80522C5.68054 7.02679 5.71429 7.2597 5.71429 7.5C5.71429 7.74032 5.68053 7.97325 5.6172 8.19493L10.8944 10.6685C11.4175 10.044 12.2302 9.64286 13.1429 9.64286C14.7208 9.64286 16 10.8421 16 12.3214C16 13.8007 14.7208 15 13.1429 15C11.5649 15 10.2857 13.8007 10.2857 12.3214C10.2857 12.0811 10.3194 11.8482 10.3827 11.6266L5.10554 9.15289C4.58247 9.77743 3.76977 10.1786 2.85714 10.1786C1.27919 10.1786 0 8.97932 0 7.5C0 6.02067 1.27919 4.82143 2.85714 4.82143C3.76982 4.82143 4.58255 5.22261 5.10562 5.84715L10.3827 3.37346C10.3194 3.15185 10.2857 2.9189 10.2857 2.67857C10.2857 1.19924 11.5649 0 13.1429 0C14.7208 0 16 1.19924 16 2.67857Z" fill="white"/>
                            </svg>
                        </button>
                    </div> 
                    <div class="product-discount-tag">
                        <?php if ($Discount > 0) {?>
                        <svg width="40" height="43" viewBox="0 0 40 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.11058 42.6954C1.78157 43.4902 0 42.637 0 41.2057V6.51187C0 2.55976 2.75926 0.0456356 7.17194 0.0385553L32.7994 1.16327e-05C37.2177 -0.00704253 39.9921 2.50341 40 6.46053V41.2057C40 42.637 38.2184 43.4902 36.8894 42.6954L20 32.5955L3.11058 42.6954Z" fill="#C34439"/>
                        </svg>                        
                        <p class="discount-percentage"><?=$Discount?>%</p>
                        <?php } ?>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        var product_quantity = Number.parseInt(document.getElementById("product-quantity").innerText);
        function changeQuantity(quantity) {
            product_quantity += quantity;
            if (product_quantity <= 1) {
                product_quantity = 1;
                document.getElementById("decrease-button").setAttribute("opacity", "0.5");
            } else {
                document.getElementById("decrease-button").setAttribute("opacity", "1");
            }
            document.getElementById("product-quantity").innerText = product_quantity;
        }

        $(".button-addtocart").click(function() {
            var quantity = Number.parseInt(document.getElementById("product-quantity").innerText);
            var price = Number.parseInt(document.getElementsByClassName("product-discount-price")[0].innerText.replace(/[^\d]/g, ""));
            $.post("<?=$SITE_URL?>/giohang/index.php",
                {
                    cart_product_id: <?=$_GET['id']?>,
                    cart_product_quantity: quantity

                },
                function(data, textStatus, jqXHR) {
                }
            );
            showNotification(quantity);
        });
        function showNotification(quantity) {
            var notification = document.getElementById('cart-count');
            notification.innerHTML = "<p>" + quantity + "</p>";
            notification.classList.add('show');
            setTimeout(function() {
                notification.classList.remove('show');
            }, 3000);
            var audio = new Audio('<?=$SOUND_DIR?>/ting.mp3');
            audio.play();
        }
    </script>
</main>