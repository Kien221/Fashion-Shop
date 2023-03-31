<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
$query = "SELECT * FROM orders";
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
        <div class="container-fluid">
            <div class="row">

                <div class="list col-3  ">
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
                <div class="list-category col-7" style="margin:0;">
                        <div class="list-category-content row">
                            <h1>Danh Sách Đơn Hàng</h1> <br>
                            <table class="col-8">
                                <tr>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>UserId</th>
                                    <th>Họ Tên</th>
                                    <th>Email</th>
                                    <th>Số ĐT</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày Đặt</th>
                                   
                                    <th>Trạng Thái</th>
                                    <th>Tùy biến</th>
                                    <th>Chi Tiết</th>
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
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phone_number'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['order_date'] ?></td>
                                    
                                    <td><?php 
                                    switch($row['status']){
                                        case '0':
                                            echo 'Mới Đặt';
                                            break;
                                        case '1':
                                            echo("<p>Đã duyệt</p>");
                                            break;
                                        case '2':
                                            echo 'Đã hủy';
                                            break;
                                    } ?>
                                    </td>
                                    <td>
                                        <?php if($row['status'] == 0){ ?>
                                        <a href="accept.php?id= <?php echo $row['id']?>&status=1" class="btn btn-success">Duyệt</a>
                                        </br></br>
                                       
                                        <a href="delete_order.php?id= <?php echo $row['id']?>" class="btn btn-danger" style="width:70px">Xóa</a>
                                        <?php } 
                                        else if($row['status'] == 1){ ?>
                                            <a href="accept.php?id= <?php echo $row['id']?>&status=2" class="btn btn-danger">Hủy</a>
                                        <?php 
                                        }
                                        else if($row['status'] == 2){ ?>
                                            <a href="accept.php?id= <?php echo $row['id']?>&status=1" class="btn btn-success">Duyệt</a>
                                        <?php }
                                        ?>

                                    </td>

                                    
                                        <td>
                                               <a href="orders_details.php?id= <?php echo $row['id']?>&status=1" class="btn btn-primary">Chi tiết</a>
                                       </td>
                                </tr>
                                <?php
                                        }
                                    }
                                    
                                ?>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>             
    </div>

</body>
</html>