<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
?>
<?php

if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0){
    $id = $_GET['id'];
    $query_stmt = "SELECT * FROM product  where id = '$id'";
    $sql = $dbc ->query($query_stmt);
    if($sql){
        $row_sql = $sql->fetch_assoc();
    }
}
?>
<?php
$query_stmt = "SELECT * FROM category ";
$stmt = $dbc->query($query_stmt);

?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $category_id = $_POST['category_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $description = $_POST['description'];
    $query = "UPDATE  product SET category_id='$category_id',title='$title',price='$price',discount='$discount',thumbnail='$thumbnail',description='$description' WHERE id={$_GET['id']}";
    $result = $dbc ->query($query);
    if($result){
        echo("<script>alert('UPDATE sản phẩm thành công');</script>" );
    }
    else echo('insert thất bại');
}
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
                        <li class="list-group-item"><a href="#">Thêm Sản Phẩm</a></li>
                        <li class="list-group-item"><a href="list_product.php">Danh Sách Sản Phẩm</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Phản Hồi & Đơn Hàng</h3></div>
                        <li class="list-group-item"><a href="contact.php">Danh Sách Phản Hồi</a></li>
                        <li class="list-group-item"><a href="order.php">Danh Sách Đơn Hàng</a></li>
                    </ul>
                    
        
                </div>
                <div class="list-add-product">
                        <h1>UPDATE Sản Phẩm</h1> <br>
                        <form action="" method="POST" class="form" enctype="multipart/form-data"> 
                            <label for="">Chọn Danh Mục<span style="color: red;">*</span></label>
                            <select name="category_id" style="display: block; width: 400px; padding: 10px; text-align: center;font-size: 20px;">
                                <option value="">Chọn</option>
                                <?php
                                    if($stmt){
                                        while($row = $stmt->fetch_assoc()){

                                ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                <?php
                                        }
                                     }
                                ?>
                               
                            </select>
                            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                            <input type="text" name="title" placeholder="Tên Sản Phẩm" value="<?php echo $row_sql['title'] ?>">
                            <input type="text" name="price" placeholder="Nhập giá khuyến mãi" value="<?php echo $row_sql['price'] ?>">
                            <input type="text" name="discount" placeholder="Nhập giá gốc" value="<?php echo $row_sql['discount'] ?>">
                            <label for="">Ảnh Sản Phẩm <span style="color: red;">*</span></label>
                            <input type="file" name="thumbnail">
                            <textarea name="description" id="" cols="30" rows="10" style="display: block;margin-bottom: 15px;width: 400px;"></textarea>
                            <button type="submit" class="btn btn-success" style="padding: 10px 20px;">UPDATE</button>
                        </form>
                    
                </div>
    </div>

</body>
</html>