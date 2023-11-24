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
    </style>
    <!-- css thân trang -->
    <style>
            .monanhot{
            position: relative;
        }
        .tieude{
            text-align: center;
            padding: 10px;
            padding-top: 10%;
        }
        .tieude >h2{
            color: #c34439;
        }
        .tieude >p{
            display: block;
            padding: 10px;
            width: 50%;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            margin: auto;
        }
        .category{
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
            padding: 5px;
        }
        .category > .item{
            height: 100%;
            border-radius: 5px;
            font-weight: 500;
            color: var(--lightblack);
            padding: 0px 10px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .category > .selected{
            transition: 0.3s;
            background-color: #c34439;
            color: #faf9f8;
        }
        .fillingbar{
            text-align: right;
            width: 100%;
            margin: 20px 0px;
        }
        .fillingbar * {
            
            font-weight: 500;
        }
        .fillingbar>div {
            display: inline-block;
        }

        .fillingbar > .filter, .fillingbar > .sort{
            width: 120px;
            position: relative;
            text-align: center;
        }

        .fillingbar #filter-button , .fillingbar #sort-button{
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            padding: 5px;
        }

        .fillingbar #filter-button:hover , .fillingbar #sort-button:hover{
            
            background-color: rgb(0, 0, 0, 0.08);
        }

        .fillingbar #filter-button >*, .fillingbar #sort-button>*{
            display: inline-block;
            vertical-align: middle;
        }
        .hidden {
            display: none !important;
            width: 0px;
            overflow: hidden;
        }
        .filter-box, .sort-box {
            width: 300px;
            background-color: white;
            border: 1px solid var(--gray);
            box-shadow: 0px 0px 5px var(--gray);
            position: absolute;
            right: 0px;
            top: 50px;
            z-index: 2;
            border-radius: 5px;
            padding: 15px;
            text-align: left;
            display: grid;
            transition: 0.3s;
        }
        .sort-box {
            width: 250px;
        }
        .filter-box p, .filter-box input[type="range"], .sort-box label {
            width: 100%;
        }
        .filter-box input, .sort-box label {
            margin: 5px 0px 15px;
            cursor: pointer;
        }
        .filter-box label {
            margin-left: 10px;
        }
        .sort-box input {
            margin-right: 10px;
        }
        .filter-box button {
            width: 100px;
            height: 35px;
            margin-top: 15px;
            border-radius: 5px;
            background-color: var(--red);
            color: white;
            font-size: 18px;
            font-weight: 400;
            justify-self: end;
        }
    </style>
    <!-- css danhmuc -->
    <style>
        .container-sanpham{
            display: grid;
            grid-template-columns: 280px auto;
            gap: 50px;
            margin: 20px 0;
        }
        .danhmuc{
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            border: 1px solid var(--gray);
        }
        .danhmuc>:not(:last-child) {
            border-bottom: 1px solid var(--gray);
        }
        .itemdanhmuc{
            background-color: white;
            width: 250%;
            height: 57px;
            display: flex;
            align-items: center;
            padding-left: 15px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
        }
        .danhmuc .selected{
            transition: 0.3s;
            background-color: #c34439;
            color: #faf9f8;
        }
        .box-product {
            width: 100%;
            
        }
        .list-products {
            width: 100%;
            display: grid ;
            grid-template-columns: repeat(3, 1fr);
            margin-top: -10px;
        }
        .product {
            position: relative;
            width: 270px;
            padding: 10px;
            margin: 15px 0px;
        }
        .product .product-image {
            width: 100%;
            height: 150px;
            margin-bottom: 10px;
        }
        .product .product-name {
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
        .product .product-description {
            text-align: center;
            font-size: 14px;
            font-weight: 400;
            color: var(--lightblack);
            margin-bottom: 10px;
        }
        .product .product-price {
        width: 100%;
        text-align: center;
    }
    .product .product-price>* {
        display: inline-block;
    }
    .product .product-price .original-price {
        text-decoration: line-through;
    }
    .product .product-price .discount-price {
        color: var(--red);
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 10px;
    }
        .product .product-buttons {
            display: grid;
            grid-template-columns:  auto 30px 30px;
            gap: 10px;
        }
        .product .product-buttons button {
            height: 30px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            background-color: var(--red);
            border: none;
            border-radius: 5px;
        }
        .product .product-buttons button:first-child {
            width: 100%;
        }
        .product .product-buttons button:last-child {
            background-color: var(--black);
        }
        .product .product-buttons>:not(button:first-child) {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product .product-discount-tag {
            position: absolute;
            top: -10px;
            right: 20px;
        }
        .product .product-discount-tag p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -80%);
            font-size: 16px;
            font-weight: 600;
            color: white;
        }
    </style>
    <!-- css so trang san pham -->
    <style>
        .sotrang{
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }
        .sotrang>* {
            display: inline-block;
            vertical-align: middle;
            margin: 0px 20px;
            cursor: pointer;
        }
        .sotrang p {
            
            width: 40px;
            height: 40px;
            font-size: 25px;
            border-radius: 5px;
        }
        .sotrang .selected {
            background-color: var(--red);
            color: white;
        }
    </style>
    <main>

        <div class="banner">
            <img src="<?=$IMAGE_DIR?>/banner.png" alt>
                <p>Khám phá ngay !</p>
        </div>
        <div class="tieude">
            <h2>Danh sách món ăn</h2>
            <p>Toàn bộ món ăn mà ChickCuisine có cung cấp cho bạn</p>
        </div>
        <div class="category whitediv">
            <a class="item <?php 
                if (!isset($_GET['category_id'])) {?>
                    selected
                    <?php } ?>" href="<?=$SITE_URL?>/thucdon">
                Tất cả
            </a>
                <?php foreach($hot_categories as $category) {extract($category); ?>
                    <p class="item <?php if (isset($_GET['category_id'])) { if($_GET['category_id'] == $Id) { ?>selected<?php }} ?>" onclick='ApplyFilters(new filter("category_id", <?=$Id?>))'>
                        <?=$Name?>
                    </p>
                <?php } ?>
        </div>
        <div class="fillingbar">
                <div class="filter">
                    <div id="filter-button">
                        <p>Lọc</p>
                        <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.875 12.75C14.4963 12.75 15 13.2537 15 13.875C15 14.4963 14.4963 15 13.875 15H7.125C6.50368 15 6 14.4963 6 13.875C6 13.2537 6.50368 12.75 7.125 12.75H13.875ZM16.875 6.375C17.4963 6.375 18 6.87868 18 7.5C18 8.12132 17.4963 8.625 16.875 8.625H4.125C3.50368 8.625 3 8.12132 3 7.5C3 6.87868 3.50368 6.375 4.125 6.375H16.875ZM19.875 0C20.4963 0 21 0.50368 21 1.125C21 1.74632 20.4963 2.25 19.875 2.25H1.125C0.50368 2.25 0 1.74632 0 1.125C0 0.50368 0.50368 0 1.125 0H19.875Z" fill="#4E4E4E"/>
                        </svg>
                    </div>
                    <div class="filter-box hidden" id="filter-box">
                            <p id="min_price_label">Giá tối thiểu: <?php if(isset($filter_by_min_price)) {?><?=number_format($filter_by_min_price, 0, ',', '.')?><?php } else { ?>0<?php } ?> vnđ</p>
                            <input type="range" min="0" max="100000" step="1000" name="min_price_filter" id="min_price_filter" value="<?php if(isset($filter_by_min_price)) {?><?=$filter_by_min_price?><?php } else { ?>0<?php } ?>">
                        <div>
                            <p id="max_price_label">Giá tối đa: <?php if(isset($filter_by_min_price)) {?><?=number_format($filter_by_max_price, 0, ',', '.')?><?php } else { ?>100.000<?php } ?> vnđ</p>
                            <input type="range" min="0" max="100000" step="1000" name="max_price_filter" id="max_price_filter" value="<?php if(isset($filter_by_max_price)) {?><?=$filter_by_max_price?><?php } else { ?>100000<?php } ?>">
                        </div>
                        <div>  
                        <input type="checkbox" name="is_discount" id="discount_filter" <?php if(isset($filter_by_discount) && $filter_by_discount == true) {?>checked<?php } ?>>
                        <label for="discount_filter">Giảm giá</label>
                        </div>
                        <button onclick="ApplyFilters(new filter('min_price', document.getElementById('min_price_filter').value), new filter('max_price', document.getElementById('max_price_filter').value), new filter('is_discount', document.getElementById('discount_filter').checked));">Lọc</button>
                    </div>
                </div>
                <div class="sort">
                    <div id="sort-button">
                        <p>Sắp xếp</p>
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.68505 1.12065e-05C4.92653 -0.00116571 5.16966 0.0903585 5.35391 0.274608L9.11428 4.03498C9.48039 4.40109 9.48039 4.99469 9.11428 5.3608C8.74817 5.72691 8.15457 5.72691 7.78846 5.3608L5.62254 3.19488V14.0625C5.62254 14.5802 5.20281 14.9999 4.68505 14.9999C4.16729 14.9999 3.74755 14.5802 3.74755 14.0625V3.20801L1.6004 5.35515C1.23429 5.72127 0.640703 5.72127 0.274592 5.35515C-0.0915308 4.98904 -0.0915308 4.39545 0.274592 4.02933L3.9567 0.347208C4.12859 0.135396 4.39101 1.12065e-05 4.68505 1.12065e-05ZM15.3124 2.16373e-05C15.8302 2.16373e-05 16.2499 0.419757 16.2499 0.937517V11.792L18.3971 9.64486C18.7632 9.27874 19.3567 9.27874 19.7229 9.64486C20.089 10.011 20.089 10.6045 19.7229 10.9706L16.0407 14.6527C15.8689 14.8646 15.6065 15 15.3124 15C15.071 15.0012 14.8279 14.9096 14.6436 14.7253L10.8831 10.965C10.5171 10.5989 10.5171 10.0054 10.8831 9.63924C11.2493 9.27312 11.8429 9.27312 12.209 9.63924L14.3749 11.8051V0.937517C14.3749 0.419757 14.7946 2.16373e-05 15.3124 2.16373e-05Z" fill="#4E4E4E"/>
                        </svg>
                    </div>
                    <div class="sort-box hidden" id="sort-box">
                        <label onclick='ApplyFilters(new filter("sort_by", 1))'>
                            <input type="radio" name="group" <?php if(isset($sort_by) && $sort_by == 1) {?>checked<?php } ?>/> Giá thấp nhất
                        </label>
                        <label onclick='ApplyFilters(new filter("sort_by", 2))'>
                            <input type="radio" name="group" <?php if(isset($sort_by) && $sort_by == 2) {?>checked<?php } ?>/> Giảm giá nhiều nhất
                        </label>
                        <label onclick='ApplyFilters(new filter("sort_by", 3))'>
                            <input type="radio" name="group" <?php if(isset($sort_by) && $sort_by == 3) {?>checked<?php } ?>/> Đánh giá tốt nhất
                        </label>
                        <label onclick='ApplyFilters(new filter("sort_by", 4))'>
                            <input type="radio" name="group" <?php if(isset($sort_by) && $sort_by == 4) {?>checked<?php } ?>/> Bán chạy nhất
                        </label>
                    </div>
                        
                </div>
        </div>

        <div class="container-sanpham">

            <div>
                <div class="danhmuc">
                    <?php foreach($categories as $category) {extract($category); ?>
                        <p class="itemdanhmuc <?php if (isset($_GET['category_id'])) { if($_GET['category_id'] == $Id) { ?>selected<?php }} ?>" onclick='ApplyFilters(new filter("category_id", <?=$Id?>))'>
                            <?=$Name?>
                        </p>
                    <?php } ?>
                </div>
            </div>

            <div class="box-product">
                <div class="list-products">
                <?php foreach($products as $product) {extract($product);?>
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
                <div class="sotrang">
                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="changePage(1)">
                        <path d="M0.358295 8.66637C0.371496 8.6545 0.389095 8.64975 0.402296 8.63788L8.88794 0.347321C9.36535 -0.115772 10.1398 -0.115772 10.6172 0.347321C10.6216 0.35207 10.6238 0.356819 10.626 0.361568C10.7416 0.464602 10.835 0.593641 10.8996 0.739672C10.9642 0.8857 10.9984 1.04519 11 1.20701L11 17.7905C10.9975 17.9553 10.9616 18.1175 10.8947 18.2656C10.8278 18.4137 10.7315 18.5442 10.6128 18.6478L10.6172 18.6526C10.377 18.8767 10.0701 19 9.75256 19C9.43506 19 9.12816 18.8767 8.88794 18.6526L0.358295 10.343C0.245958 10.2396 0.155749 10.111 0.0938921 9.96631C0.0320339 9.82158 0 9.66408 0 9.50469C0 9.3453 0.0320339 9.18781 0.0938921 9.04307C0.155749 8.89834 0.245958 8.76982 0.358295 8.66637Z" fill="#4E4E4E"/>
                    </svg>
                    <?php for($index = 1; $index <= ceil($total_products_count / 9); $index++) { ?>
                        <p <?php if($page == $index) {?>class="selected"<?php } ?> onclick="changePage(<?=$index?>)"><?=$index?></p>
                    <?php } ?>
                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="changePage('<?=ceil($total_products_count / 9)?>')">
                        <path d="M10.6417 8.66637C10.6285 8.6545 10.6109 8.64975 10.5977 8.63788L2.11206 0.347321C1.63465 -0.115772 0.860224 -0.115772 0.382811 0.347321C0.37841 0.35207 0.376211 0.356819 0.374011 0.361568C0.258409 0.464602 0.165045 0.593641 0.100444 0.739672C0.0358434 0.8857 0.00156357 1.04519 0 1.20701L0 17.7905C0.00246674 17.9553 0.0384235 18.1175 0.105331 18.2656C0.172239 18.4137 0.268465 18.5442 0.387211 18.6478L0.382811 18.6526C0.623026 18.8767 0.92993 19 1.24744 19C1.56494 19 1.87184 18.8767 2.11206 18.6526L10.6417 10.343C10.754 10.2396 10.8443 10.111 10.9061 9.96631C10.968 9.82158 11 9.66408 11 9.50469C11 9.3453 10.968 9.18781 10.9061 9.04307C10.8443 8.89834 10.754 8.76982 10.6417 8.66637Z" fill="#4E4E4E"/>
                    </svg>
                </div>
            </div>
        </div>
    </main>
    <script>
        function changePage(page_index) {


            ApplyFilters(new filter("page", page_index));
        }

        document.getElementById("filter-button").addEventListener("click", function (e) {
            document.getElementById("filter-box").classList.toggle("hidden");
            if (!document.getElementById("sort-box").classList.contains("hidden")) {
                document.getElementById("sort-box").classList.add("hidden");
                document.getElementById("sort-button").style.backgroundColor = "";
            }

            var filter_button = document.getElementById("filter-button");
            if (filter_button.style.backgroundColor) {
                filter_button.style.backgroundColor = "";
            } else {
                filter_button.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
            }
        });

        document.getElementById("sort-button").addEventListener("click", function (e) {
            document.getElementById("sort-box").classList.toggle("hidden");
            if (!document.getElementById("filter-box").classList.contains("hidden")) {
                document.getElementById("filter-box").classList.add("hidden");
                document.getElementById("filter-button").style.backgroundColor = "";
            }
            var sort_button = document.getElementById("sort-button");
            if (sort_button.style.backgroundColor) {
                sort_button.style.backgroundColor = "";
            } else {
                sort_button.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
            }
        });



        var max_price_filter =document.getElementById("max_price_filter");
        max_price_filter.addEventListener("input",function (e) {
            document.getElementById("max_price_label").innerText = "Giá tối đa: " + (Number.parseInt(max_price_filter.value)).toLocaleString('vi-VN') + " vnđ"
        });

        var min_price_filter =document.getElementById("min_price_filter");
        min_price_filter.addEventListener("input",function (e) {
            document.getElementById("min_price_label").innerText = "Giá tối thiểu: " + (Number.parseInt(min_price_filter.value)).toLocaleString('vi-VN') + " vnđ"
        });
        function filter(key, value) {
            this.key = key;
            this.value = value;
        }
        function ApplyFilters(...filters) {
            var current_url = new URL(window.location.href);
            var params = new URLSearchParams(current_url.search);
            var redirectToCategory = false;
            filters.forEach(filter => {
                if (filter.value === "") {
                    return;
                }
                if (filter.key == "category_id") {
                    redirectToCategory = true;
                    window.location.href = "<?=$SITE_URL?>/thucdon/?category_id=" + filter.value;
                }
                params.set(filter.key, filter.value);
            });
            if (redirectToCategory) {
                return;
            }
            var filter_array = [];
            if (params.get("category_id") != null) {
                filter_array.push("category_id=" + params.get("category_id"));
            }
            if (params.get("search") != null) {
                filter_array.push("search=" + params.get("search"));
            }
            if (params.get("min_price") != null) {
                filter_array.push("min_price=" + params.get("min_price"));
            }
            if (params.get("max_price") != null) {
                filter_array.push("max_price=" + params.get("max_price"));
            }
            if (params.get("is_discount") != null) {
                filter_array.push("is_discount=" + params.get("is_discount"));
            }
            if (params.get("sort_by") != null) {
                filter_array.push("sort_by=" + params.get("sort_by"));
            }
            if (params.get("page") != null) {
                filter_array.push("page=" + params.get("page"));
            }
            var url = "<?=$SITE_URL?>/thucdon/?" + filter_array.join("&");
            

            window.location.href = url;
        }
    </script>