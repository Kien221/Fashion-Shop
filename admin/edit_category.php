<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');

if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0){
    $id = $_GET['id'];
    $query = "SELECT * FROM category where id = '$id'";
    $result = $dbc ->query($query);
    if($result){
        $row = $result->fetch_assoc();
    }
}
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $category = $_POST['category_name'];
    $query = "UPDATE category SET name = '$category' WHERE id ='$id'";
    $stml = $dbc ->query($query);
    if($stml){
        echo('Cập nhật thành công');
        header ("Location: list_category.php");
    }
    else echo('Cập nhật thất bại');
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
                        <li class="list-group-item"><a href="">Thêm Danh Mục</a> </li>
                        <li class="list-group-item"><a href="list_category.php">Danh Sách Danh Mục</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Sản Phẩm</h3></div>
                        <li class="list-group-item"><a href="">Thêm Sản Phẩm</a></li>
                        <li class="list-group-item"><a href="">Danh Sách Sản Phẩm</a></li>
                    </ul>
                    <ul class="list-group">
                        <div class="title"><h3>Phản Hồi & Đơn Hàng</h3></div>
                        <li class="list-group-item"><a href="">Danh Sách Phản Hồi</a></li>
                        <li class="list-group-item"><a href="">Danh Sách Đơn Hàng</a></li>
                    </ul>
                    
        
                </div>
                <div class="add-category">
                        <h1>Sửa Danh Mục</h1> <br>
                        <form action="" method="POST" class="form">
                            <input type="text" placeholder="Nhập Tên Danh Mục" name="category_name" VALUE = "<?php echo $row['name']?>">
                            <button type="submit" class="btn btn-success">UPDATE</button>
                        </form>
                    
                </div>
    </div>

</body>
</html>