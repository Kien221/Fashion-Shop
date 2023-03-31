<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chức Năng Của ADMIN</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <h1 class="text-center">QUẢN LÝ WEB BÁN HÀNG</h1>
    </div>
    <div class="body">
        <ul class="list-function">
            <li><a href="add_category.php">QUẢN LÝ DANH MỤC</a></li>
            <li><a href="add_product.php">QUẢN LÝ SẢN PHẨM</a></li>
            <li><a href="">QUẢN LÝ PHẢN HỒI</a></li>
            <li><a href="order.php">QUẢN LÝ ĐƠN HÀNG</a></li>
        </ul>

    </div>
    
</body>
</html>