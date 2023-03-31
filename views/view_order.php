<?php
require_once ('../database/connect_sql.php');
$query = "SELECT * FROM category ";
$result = $dbc->query($query);
$id = $_SESSION['id'];
$query = "SELECT b.thumbnail,b.title,a.num,a.total_money,status FROM  order_details a join product b on a.product_id = b.id 
        join orders c on c.id = a.order_id join user d on d.id = c.user_id WHERE d.id = '$id'";
//var_dump($query);
$result_stmt = $dbc->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Đơn Hàng</title>
</head>
<body>
<header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center" style="position: unset";>
            <a class="navbar-brand" href="index.php">
                <img src="https://t004.gokisoft.com/uploads/2021/07/1-s-1636-logo-web.jpg " id="logo-header" style="width:100px;">
            </a>
            <ul class="navbar-nav ">
                <?php
                    if($result){
                        while($row = $result->fetch_assoc()){

                    
                ?>
               <li class="nav-item">
                  <a class="nav-link text-success" href="category.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
               </li>
               <?php
                        }
                    }
               ?>
            </ul>
         </nav>
         <?php
         require_once ('menu.php');
         ?>
    </header>

<div class="list-category" style="width:100%;padding-top:100px;text-align:center;">
                    <div class="list-category-content">

                        <h1>Chi tiết đơn hàng</h1> <br>
                        <table style="width:100%;">
                            <tr>
                                <th>ẢNH</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                
                               
                            </tr>
                                <?php
                                    $sum = 0;
                                    if($result){
                                        while($row = $result_stmt->fetch_assoc()){
                                    

                                ?>
                            <tr>
                           
                                <td><img src="./assets/img/<?php echo $row['thumbnail']?>" alt="" style="width:100px"></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['num']?></td>
                                <td><?php echo $row['total_money']?></td>
                                <td><?php 
                                    switch($row['status']){
                                        case '0':
                                            echo 'Chưa duyệt';
                                            break;
                                        case '1':
                                            echo("<p>Đã duyệt</p>");
                                            break;
                                        case '2':
                                            echo 'Đã hủy';
                                            break;
                                    } ?>
                                    </td>
                            
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

<?php
include ('./particals/footer.php');
?>   
</body>
</html>