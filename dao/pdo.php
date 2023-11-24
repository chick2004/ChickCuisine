<?php
function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=chickcuisine;charset=utf8";
    $conn = new PDO($dburl, "root", "");
    return $conn;
}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{ $conn = pdo_get_connection();
         $stmt = $conn->prepare($sql);
         $stmt->execute($sql_args);
         $lastInsertId = $conn->lastInsertId();
         return $lastInsertId;
    }
    catch(PDOException $e){ die("Lỗi thực thi sql: ". $e->getMessage() . $sql ); }
}
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{ $conn = pdo_get_connection();
         $stmt = $conn->prepare($sql);
         $stmt->execute($sql_args);
         $rows = $stmt->fetchAll();
         return $rows;
    }
    catch(PDOException $e){ die("Lỗi trong hàm pdo_query: ". $e->getMessage(). $sql);}
}
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{$conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){die("Lỗi trong hàm pdo_query_one: ". $e->getMessage() . $sql );}
}
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{ $conn = pdo_get_connection();
         $stmt = $conn->prepare($sql);
         $stmt->execute($sql_args);
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         return $row ? array_values($row)[0] : null;
    }
    catch(PDOException $e){ 
        die("Lỗi trong hàm pdo_query_value: ". $e->getMessage() .$sql );
    }
}
?>