<!-- css trang -->
<style>
    main {
        padding: 0px 100px;
    }
    .banner {
        width: calc(100% + 200px);
        margin-left: -100px;
        height: fit-content;
        position: relative;
    }
    .banner img {
        width: 100%;
    }
    .banner p {
        position: absolute;
        right: 100px;
        bottom: 100px;
        color: white;
        font-size: 20px;
        font-weight: 600;
        background-color: var(--red);
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        border: 1px solid rgba(0, 0, 0, 0);
    }
    .banner p:hover {
        border: 1px solid white;
        background-color: rgba(0, 0, 0, 0.4);
        transition: 0.3s;
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
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .container .product {
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
        width: 100%;
        height: 55px;
        word-wrap: wordwrap;
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
    .list-categories {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .category {
        background-color: var(--red);
        border-radius: 10px;
        height: 100px;
        width: 30%;
        display: grid;
        grid-template-columns: 100px auto;
        transition: 0.3s;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        margin: 10px 0px;
        border: 1px solid var(--gray);
        box-shadow: 0px 0px 5px var(--gray);
    }
    .category>* {
        align-self: center;
        color: white;
    }
    .category .category-image {
        width: 100%;
        grid-column: 1 / 2;
        grid-row: 1 / 3;
        margin-left: -100px;
        background-color: white;
    }
    .category:hover .category-image {
        margin-left: 0px;
        transition: 0.3s;
    }
    .category .category-name {
        grid-column: 2 / 3;
        grid-row: 1 / 2;
        margin-top: 10px;
        margin-left: -60px;
        font-size: 26px;
        font-weight: 600;
    }
    .category:hover .category-name {
        margin-left: 10px;
        transition: 0.3s;
    }
    .category .category-product-count {
        grid-column: 2 / 3;
        grid-row: 2 / 3;
        margin-bottom: 10px;
        font-size: 22px;
        font-weight: 400;
        margin-left: -60px;
    }
    .category:hover .category-product-count {
        margin-left: 10px;
        transition: 0.3s;
    }
    .category svg {
        position: absolute;
        left: 10px;
    }
    .category:hover svg {
        display: none;
    }
    .view-more {
        text-align: right;
    }
    .view-more button {
        background-color: unset;
    }
    .view-more button * {
        display: inline-block;
        color: var(--red);
        font-size: 24px;
        font-weight: 600;
        vertical-align: middle;
        margin: 0px 5px;
    }
</style>
<main>
    <div class="banner">
        <img src="<?=$IMAGE_DIR?>/banner.png" alt>
            <p>Khám phá ngay !</p>
    </div>
    <div class="container">
        <div class="container-title">
            <p>Món ăn nổi bậc</p>
            <p>Danh sách các món ăn được xem nhiều nhất</p>
        </div>
        <div class="list-products">
            <?php foreach($hot_products as $product) {extract($product);?>
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
    <div class="view-more">
        <button>
            <p>Xem thêm</p>
            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z" fill="#C34439"/>
            </svg>
        </button>
        <div class="line"></div> 
    </div>
    <div class="container">
        <div class="container-title">
            <p>Sự kiện giảm giá</p>
            <p>Đồng loạt giảm giá, lên tới 30%!</p>
        </div>
        <div class="list-products">
            <?php foreach($discount_products as $product) {extract($product);?>
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
    <div class="view-more">
        <button>
            <p>Xem thêm</p>
            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M0 9.44109C0 8.65897 0.671578 8.02493 1.5 8.02493H19.0739L12.4998 2.47157C11.8824 1.95004 11.8297 1.05476 12.3821 0.471886C12.9345 -0.110989 13.8828 -0.160724 14.5002 0.360802L24.0001 8.38571C24.3181 8.65437 24.4999 9.0382 24.4999 9.44109C24.4999 9.844 24.3181 10.2278 24.0001 10.4965L14.5002 18.5214C13.8828 19.0429 12.9345 18.9933 12.3821 18.4104C11.8297 17.8275 11.8824 16.9321 12.4998 16.4106L19.0739 10.8573H1.5C0.671578 10.8573 0 10.2232 0 9.44109Z" fill="#C34439"/>
            </svg>
        </button>
        <div class="line"></div> 
    </div>
    <div class="container">
        <div class="container-title">
            <p>Danh mục ưa thích</p>
            <p>Tập hợp các danh mục món ăn được đặt nhiều nhất</p>
        </div>
        <div class="list-categories">
            <?php foreach ($hot_categories as $category) { extract($category); ?>
                <a class="category" href="<?=$SITE_URL?>/thucdon?category=<?=$Id?>">
                    <img class="category-image" src="<?=$IMAGE_DIR?>/<?=$Image?>" alt="">
                    <p class="category-name"><?=$Name?></p>
                    <p class="category-product-count">(<?=get_product_count_by_category_id($Id) ?> món)</p>
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="white"/>
                    </svg>                        
                </a>
            <?php } ?>
        </div>
    </div>
</main>