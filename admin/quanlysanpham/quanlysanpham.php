<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng</title>
   <style>
    .toolbar {
        width: 100%;
        display: grid;
        height: 70px;
        grid-template-columns: repeat(2, 50%);
    }
    .toolbar .left {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }
    .toolbar .right {
        grid-column: 2 /3;
        grid-row: 1 / 2;
    }
    .toolbar .left *, .toolbar .right * {
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
    }
    .toolbar .add-button {
        background-color: var(--red);
        padding: 5px 10px;
        border-radius: 5px;
    }
    .toolbar .add-button>* {
        display: inline-block;
        vertical-align: top;
    }
    .toolbar .add-button p {
        color: white;
        margin-left: 10px;
    } 
    .toolbar .search-bar {
        background-color: white;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid var(--gray);
        margin-left: 10px;
    }
    .toolbar .search-bar input {
        border: unset;
        outline: none;
    }
    .right {
        text-align: right;
    }
    .right .filter-button {
        margin-right: 20px;
    }
    .right p {
        margin-left: 10px;
    }
    .list-category {
        background-color: white;
        border: 1px solid var(--gray);
        border-radius: 10px;
    }
    .list-category, .list-category table {
        width: 100%;
    }
    .list-category table td:nth-child(1) {
        width: 5%;
    }
    .list-category table td:nth-child(2) {
        width: 10%;
    }
    .list-category table td:nth-child(3) {
        width: 45%;
        text-align: left;
    }
    .list-category table td:nth-child(4) {
        width: 20%;
    }
    .list-category table td:nth-child(6) {
        width: 20%;
    }
    .list-category table tr:first-child td, .list-category table tr td:first-child, .list-category table tr td:last-child {
        text-align: center;
    }
    .list-category .category-image img{
        width: 75px;
        height: 75px;
        border-radius: 5px;
        overflow: hidden;
    }
    .list-category table {
        
        border-collapse: collapse;
    }
    .list-category table td, .cart table th {
        padding: 10px;
        text-align: center;
    }
    .list-category table tr:first-child {
        height: 50px;
    }
    .list-category table tr:not(:last-child) {
        border-bottom: 1px solid var(--gray);
    }
    .list-category table tr {
        height: 100px;
    }
    .category-action>* {
        background-color: var(--red);
        width: 30px;
        height: 30px;
        padding: 5px;
        border-radius: 5px;
        display: inline-block;
        vertical-align: middle;
        margin: 0px 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
    <main>
        <div class="toolbar">
            <div class="left">
                <div class="add-button">
                    <img src="/chickcuisine/content/image/icon/add.png" alt="">
                    <p>Thêm danh mục</p>
                </div>
                <div class="search-bar">
                    <img src="/chickcuisine/content/image/icon/search-black.png" alt="">
                    <input type="text" placeholder="Tìm kiếm">
                </div>
            </div>
            <div class="right">
                <div class="filter-button">
                    <p>Lọc</p>
                    <img src="/chickcuisine/content/image/icon/filter.png" alt="">
                </div>
                <div class="sort-button">
                    <p>Sắp xếp</p>
                    <img src="/chickcuisine/content/image/icon/sort.png" alt="">
                </div>
            </div>
        </div>
        <div class="list-category">
            <table>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Hình ảnh</td>
                    <td>Tên</td>
                    <td>Số lượng</td>
                    <td>Hành động</td>
                </tr>
                <tr>
                    <td class="category-checkbox"><input type="checkbox" name="" id=""></td>
                    <td class="category-image"><img src="image/food.png" alt=""></td>
                    <td class="category-name">Hamburger</td>
                    <td class="category-product-count">10</td>
                    <td class="category-action">
                        <div class="edit-button">
                            <img src="/chickcuisine/content/image/icon/edit.png" alt="">
                        </div>
                        <div class="remove-button">
                            <img src="/chickcuisine/content/image/icon/remove.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="category-checkbox"><input type="checkbox" name="" id=""></td>
                    <td class="category-image"><img src="image/food.png" alt=""></td>
                    <td class="category-name">Hamburger</td>
                    <td class="category-product-count">10</td>
                    <td class="category-action">
                        <div class="edit-button">
                            <img src="/chickcuisine/content/image/icon/edit.png" alt="">
                        </div>
                        <div class="remove-button">
                            <img src="/chickcuisine/content/image/icon/remove.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="category-checkbox"><input type="checkbox" name="" id=""></td>
                    <td class="category-image"><img src="image/food.png" alt=""></td>
                    <td class="category-name">Hamburger</td>
                    <td class="category-product-count">10</td>
                    <td class="category-action">
                        <div class="edit-button">
                            <img src="/chickcuisine/content/image/icon/edit.png" alt="">
                        </div>
                        <div class="remove-button">
                            <img src="/chickcuisine/content/image/icon/remove.png" alt="">
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>
    </main>
</body>
</html>