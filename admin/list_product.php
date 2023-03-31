<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
$query = "SELECT a.*,b.name FROM product a, category b where a.category_id = b.id order by id desc";
$result = $dbc->query($query);
?>
<?php
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
                        <li class="list-group-item"><a href="list_category.php">Danh Sách Danh Mục</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Sản Phẩm</h3></div>
                        <li class="list-group-item"><a href="add_product.php">Thêm Sản Phẩm</a></li>
                        <li class="list-group-item"><a href="#">Danh Sách Sản Phẩm</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Phản Hồi & Đơn Hàng</h3></div>
                        <li class="list-group-item"><a href="#">Danh Sách Phản Hồi</a></li>
                        <li class="list-group-item"><a href="order.php">Danh Sách Đơn Hàng</a></li>
                    </ul>
                    
        
                </div>
                <div class="list-category">
                    <div class="list-category-content">

                        <h1>Danh Sách Sản Phẩm</h1> <br>
                        <table>
                            <tr>
                                <th>STT</th>
                                <th>ID</th>
                                <th>Tên Danh Mục</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Khuyến Mãi</th>
                                <th>Giá Gốc</th>
                                <th>Hình ảnh</th>
                                <th>Chi tiết</th>
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
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['discount'] ?></td>
                                <td><img src="./assets/img/<?php echo $row['thumbnail'] ?>" alt="" style="width:100px"></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><a href="edit_product.php?id= <?php echo $row['id']?>" class="btn btn-success">Sửa</a><a href="delete_product.php?id= <?php echo $row['id']?>" class="btn btn-danger">Xóa</a></td>
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