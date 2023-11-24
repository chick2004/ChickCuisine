<?php
    require_once 'pdo.php';


    function get_product_by_id($product_id) {
        $sql = "SELECT product.*, AVG(comment.rating) as Rating FROM product LEFT JOIN comment ON product.Id = comment.ProductId WHERE product.Id = $product_id GROUP BY product.Id";
        return pdo_query_one($sql);
    }

    /**
     * Lấy danh sách toàn bộ sản phẩm theo bộ lọc
     * 
     * @param int $category_id mã danh mục cần lọc
     * @param string $keyword tên sản phầm (dùng trong tìm kiếm)
     * @param int $min_Price giá thấp nhất
     * @param int $max_price giá cao nhất
     * @param bool $is_discount chỉ chọn sản phẩm giảm giá
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * @param int $page số trang, nếu sử dụng, bắt buộc phải có $limit
     * @param int $sort tiêu chí sắp xếp: 1 - Theo giá, 2 - Theo giảm giá, 3 - Theo đánh giá trung bình, 4 - Theo số lượng đặt hàng
     * 
     * @return array danh sách sản phẩm
     */
    function get_product_by_filter($category_id = null, $keyword = null, $min_price = null, $max_price = null, $is_discount = false, $limit = null, $page = null, $sort = null) {
        $condition = "";
        if ($category_id != null) {
            $condition .= " AND product.CategoryID = $category_id";
        }
        if ($min_price != null) {
            $condition .= " AND (product.Price * (100-product.Discount) /100) >= $min_price";
        }
        if ($max_price != null) {
            $condition .= " AND (product.Price * (100-product.Discount) /100) <= $max_price";
        }
        if ($is_discount) {
            $condition .= " AND product.Discount > 0";
        }
        if($keyword != null) {
            $condition .= " AND product.Name LIKE '%".$keyword."%'";
        }
        $condition = $condition == "" ? "" : substr($condition , 4);
        $filter = ($condition != "" ? " WHERE (".$condition.")" : "");
        $sql = "SELECT product.*, AVG(comment.rating) as Rating , SUM(orderdetail.Quantity) as OrderCount FROM product
        LEFT JOIN comment ON product.id = comment.productid
        LEFT JOIN orderdetail ON product.id = orderdetail.productid".
        $filter
        ." GROUP BY product.id";

        if ($sort != null) {
            switch ($sort) {
                case 1 : 
                    $sql.= " ORDER BY (product.Price * (100-product.Discount) /100) ASC";
                    break;
                case 2 : 
                    $sql.= " ORDER BY Discount DESC";
                    break;
                case 3 :
                    $sql.= " ORDER BY Rating DESC";
                    break;
                case 4 :
                    $sql.= " ORDER BY OrderCount DESC";
                    break;
            }
        }
        if ($limit != null) {
            $sql.= " LIMIT $limit";
        }
        if ($page != null) {
            $offset = ($page-1)*$limit;
            $sql.= " OFFSET $offset";
        }
        return pdo_query($sql);
    }

    /**
     * Lấy danh sách toàn bộ sản phẩm
     * 
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * @param int $page số trang, nếu sử dụng, bắt buộc phải có $limit
     * @param int $sort tiêu chí sắp xếp: 1 - Theo giá, 2 - Theo giảm giá, 3 - Theo đánh giá trung bình, 4 - Theo số lượng đặt hàng
     * 
     * @return array danh sách sản phẩm
     */
    function get_products($limit = null, $page = null, $sort = null) {
        $sql = "SELECT product.*, AVG(comment.rating) as Rating , SUM(orderdetail.Quantity) as OrderCount FROM product
        LEFT JOIN comment ON product.id = comment.productid
        LEFT JOIN orderdetail ON product.id = orderdetail.productid
        GROUP BY product.id";
        if ($limit != null) {
            $sql.= " LIMIT $limit";
        }
        if ($page != null) {
            $offset = ($page-1)*$limit;
            $sql.= " OFFSET $offset";
        }
        if ($sort != null) {
            switch ($sort) {
                case 1 : 
                    $sql.= " ORDER BY Price DESC";
                    break;
                case 2 : 
                    $sql.= " ORDER BY Discount DESC";
                    break;
                case 3 :
                    $sql.= " ORDER BY Rating DESC";
                    break;
                case 4 :
                    $sql.= " ORDER BY OrderCount DESC";
                    break;
            }
        }
        return pdo_query($sql);
    }

    /**
     * Lấy danh sách các sản phẩm khác tương tự
     * 
     * @param int $product_id mã sản phẩm
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * @param int $page số trang, nếu sử dụng, bắt buộc phải có $limit
     * 
     * @return array danh sách sản phẩm
     */
    function get_similar_products_by_product_id($product_id, $limit = null, $page = null) {
        $sql = "SELECT p2.* FROM product p1 JOIN product p2 ON p1.categoryId = p2.categoryId WHERE p1.Id = $product_id AND p1.Id != p2.Id";
        if ($limit != null) {
            $sql.= " LIMIT $limit";
        }
        if ($page != null) {
            $offset = ($page-1)*$limit;
            $sql.= " OFFSET $offset";
        }
        return pdo_query($sql);
    }


    /**
     * Lấy danh sách sản phẩm của danh mục
     * 
     * @param int $category_id mã danh mục
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * @param int $page số trang, nếu sử dụng, bắt buộc phải có $limit
     * 
     * @return array danh sách sản phẩm
     */
    function get_products_by_category_id($category_id, $limit = null, $page = null, $sort = null) {
        $sql = "SELECT product.*, AVG(comment.rating) as Rating , SUM(orderdetail.Quantity) as OrderCount FROM product LEFT JOIN comment ON product.Id = comment.ProductId LEFT JOIN orderdetail ON product.Id = orderdetail.ProductId WHERE CategoryId = $category_id GROUP BY product.id";
        if ($limit != null) {
            $sql.= " LIMIT $limit";
        }
        if ($page != null) {
            $offset = ($page-1)*$limit;
            $sql.= " OFFSET $offset";
        }
        if ($sort != null) {
            switch ($sort) {
                case 1 : 
                    $sql.= " ORDER BY Price ASC";
                    break;
                case 2 : 
                    $sql.= " ORDER BY Discount DESC";
                    break;
                case 3 :
                    $sql.= " ORDER BY Rating DESC";
                    break;
                case 4 :
                    $sql.= " ORDER BY OrderCount DESC";
                    break;
            }
        }
        return pdo_query($sql);
    }

    /**
     * Lấy danh sách sản phẩm hot, dựa trên lượt xem
     * 
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * 
     * @return array danh sách sản phẩm
     */
    function get_hot_products($limit = null) {       
        $sql = "SELECT product.*, AVG(comment.rating) as Rating FROM product LEFT JOIN comment ON product.Id = comment.ProductId GROUP BY product.Id ORDER BY Views DESC".($limit == null ? "" : " LIMIT $limit");
        return pdo_query($sql);
    }

    /**
     * Lấy danh sách sản phẩm giảm giá
     * 
     * @param int $limit giới hạn số sản phẩm, lấy tất cả nếu không sử dụng
     * 
     * @return array danh sách sản phẩm
     */
    function get_discount_products($limit = null) {       
        $sql = "SELECT product.*, AVG(comment.rating) as Rating FROM product LEFT JOIN comment ON product.Id = comment.ProductId GROUP BY product.Id ORDER BY Discount DESC".($limit == null ? "" : " LIMIT $limit");
        return pdo_query($sql);
    }
    
    /**
     * Lấy tổng lượt đánh giá của sản phẩm
     * 
     * @param int $product_id mã sản phẩm
     * 
     * @return int tổng đánh giá
     */
    function get_product_rating_count($product_id) {
        $sql = "SELECT COUNT(comment.ProductId) FROM comment WHERE comment.ProductId = $product_id GROUP BY comment.ProductId";
        return pdo_query_value($sql);
    }















    
    // function get_product_by_id($id) {
    //     $sql = "SELECT * FROM product WHERE id = $id";
    //     return pdo_query_one($sql);
    // }

    // function increase_product_views($id) {
    //     $sql = "UPDATE product SET Views = Views + 1 WHERE id = $id"; 
    //     return pdo_execute($sql);
    // }

    // function get_similar_products ($id, $limit = null) {
    //     $product = get_product_by_id($id);
    //     $category_id = $product["CategoryId"];
    //     $sql = "SELECT * FROM product WHERE CategoryId = $category_id".($limit == null ? "" : " LIMIT $limit");
    //     return pdo_query($sql);
    // }
    // function get_product_name_by_id($id) {
    //     $sql = "SELECT Name FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }
    // function get_product_price_by_id($id) {
    //     $sql = "SELECT Price FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }
    // function get_product_image_by_id($id) {
    //     $sql = "SELECT Image FROM product WHERE Id = $id";
    //     return pdo_query_value($sql);
    // }

    // function insert_product($name, $image, $description, $price, $discount, $views, $isspecial, $categoryid) {
    //     $sql = "INSERT INTO product (Name, Image, Description, Price, Discount, Views, IsSpecial, CategoryId) VALUES (?,?,?,?,?,?,?,?)";
    //     return pdo_execute($sql, $name, $image, $description, $price, $discount, $views, $isspecial, $categoryid);
    // }

    // function delete_product($id) {
    //     $sql = "DELETE FROM product WHERE Id = $id";
    //     return pdo_execute($sql);
    // }
    // function update_product($id, $name, $image, $description, $price, $discount, $isspecial, $categoryid) {
    //     if ($image == "") {
    //         $sql = "UPDATE product SET Name = ?, Description = ?, Price = ?, Discount = ?, IsSpecial = ?, Categoryid = ? WHERE Id =$id";
    //         return pdo_execute($sql, $name, $description, $price, $discount, $isspecial, $categoryid);
    //     } else {
    //         $sql = "UPDATE product SET Name = ?, Image = ?, Description = ?, Price = ?, Discount = ?, IsSpecial = ?, Categoryid = ? WHERE Id =$id";
    //         return pdo_execute($sql, $name, $image, $description, $price, $discount, $isspecial, $categoryid);
    //     }
    // }
?>