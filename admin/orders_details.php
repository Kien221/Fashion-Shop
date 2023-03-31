<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
$id = $_GET['id'];
$query = "SELECT b.thumbnail,b.title,a.num,a.total_money FROM  order_details a join product b on a.product_id = b.id 
           WHERE a.order_id = '$id'";
//var_dump($query);
$result = $dbc->query($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>order-details</title>
</head>
<body>
    <div class="header"style="text-align:center">
        <h1 class="text-center">QUẢN LÝ WEB BÁN HÀNG</h1>
    </div>
    
    <div class="list-category" style="width:93%">
                    <div class="list-category-content">

                        <h1>Chi tiết đơn hàng</h1> <br>
                        <table>
                            <tr>
                                <th>ẢNH</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                
                               
                            </tr>
                                <?php
                                    $sum = 0;
                                    if($result){
                                        while($row = $result->fetch_assoc()){
                                    

                                ?>
                            <tr>
                           
                                <td><img src="./assets/img/<?php echo $row['thumbnail']?>" alt="" style="width:100px"></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['num']?></td>
                                <td><?php echo $row['total_money']?></td>
                            
                            </tr>
                                <?php
                                    $sum +=$row['total_money'];
                                        }
                                    }
                                    
                                ?>
                        </table>
                    </div>
                    <h2 style="margin-left:850px">Tổng Tiền:<?php echo $sum?>VND</h2>
                    
                </div>
</body>
</html>