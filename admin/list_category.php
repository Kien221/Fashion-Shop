<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
$query = "SELECT * FROM category order by id desc";
$result = $dbc->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM DANH MỤC</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <h1 class="text-center">QUẢN LÝ WEB BÁN HÀNG</h1>
    </div>
    <div class="body">             
                <div class="list">
                    <ul class="list-group">
                        <div class="title"><h3> Danh Mục</h3></div>
                        <li class="list-group-item"><a href="add_category.php">Thêm Danh Mục</a> </li>
                        <li class="list-group-item"><a href="#">Danh Sách Danh Mục</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Sản Phẩm</h3></div>
                        <li class="list-group-item"><a href="add_product.php">Thêm Sản Phẩm</a></li>
                        <li class="list-group-item"><a href="list_product.php">Danh Sách Sản Phẩm</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Phản Hồi & Đơn Hàng</h3></div>
                        <li class="list-group-item"><a href="contact.php">Danh Sách Phản Hồi</a></li>
                        <li class="list-group-item"><a href="order.php">Danh Sách Đơn Hàng</a></li>
                    </ul>
                    
        
                </div>
                <div class="list-category">
                    <div class="list-category-content">

                        <h1>Danh Sách Danh Mục</h1> <br>
                        <table>
                            
                            <tr>
                                <th>STT</th>
                                <th>ID</th>
                                <th>Tên Danh Mục</th>
                                <th>Tùy Biến</th>
                            </tr>
                            <?php
                                if($result){
                                    $i = 0;
                                    while($row = $result->fetch_assoc()){
                                        $i++;
            
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><a href="edit_category.php?id= <?php echo $row['id']?>" class="btn btn-success">Sửa</a>|<a href="delete_category.php?id= <?php echo $row['id']?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                            <?php
                                    }
                                 }
                            ?>  
                        </table>
                    </div>
                    
                </div>
    </div>

</body>
</html>