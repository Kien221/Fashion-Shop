<?php
require_once ('../database/connect_sql.php');
$query = "SELECT * FROM category ";
$result = $dbc->query($query);

?>
<?php
$cart = $_SESSION['cart'];
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
    
    <title>Cart</title>
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
    <main>
        <div class="container">
            <div class="colum-10">
                <p class="cart-title"><a class="cart-a" href="index.html">Trang Chủ </a>/ Giỏ Hàng - Bạn đang có 1 sản phẩm trong giỏ hàng</p> 
            </div>
            <div class="cart_product">
                <div class="cart-title-left colum-8">
                    <div class="header-info">
                        <div class="colum-4">SẢN PHẨM</div>
                        <div class="colum-2">GIÁ</div>
                        <div class="colum-2">SỐ <br>LƯỢNG</div>
                        <div class="colum-2">TỔNG</div>
                    </div>

                    <?php
                         $sum = 0;
                        if(!empty($_SESSION['cart'])){
                        foreach($cart as $id => $row):
                          
                    ?>
                   
                    <div class="cart-item">
                        <div class="colum-4">
                            <div class="names-img">
                                <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="img">
                                <div class="item-names">
                                    <p class="names-p"><a class="names" href="#"><?php echo $row['title'] ?></a><br>Size:</p>
                                </div>
                            </div>
                        </div>
                        <div class="colum-2" style="text-align:center;">
                           
                                <p><?php echo $row['price'] ?><br> VND</p>
                           
                        </div>

                        <div class="colum-2" style="text-align:center;" class="quantity">
                                <div style="text-align:center;width:100%;">

                                    <a href="./function/update_quantity.php?id=<?php echo $id?>&type=decrea" style="text-decoration:none;color:black;font-size:20px;">-</a>
                                    
                                    <?php echo $row['quantity']?>
                                    
                                    <a href="./function/update_quantity.php?id=<?php echo $id?>&type=increa" style="text-decoration:none;color:black;font-size:20px;">+</a>
                                </div>
                        </div>
                                
                        <div class="colum-2" style="text-align:center;">
                                   
                                <p><?php echo $row['price'] * $row['quantity'] ?><br> VND</p>
                            
                                
                        </div>
                        
                        <div class="colum-1">
                            <div class="remove">
                                <a href="./function/delete_product.php?id=<?php echo $id?>" class="cart-remove" onclick="">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                        $result_sum =  $row['price'] * $row['quantity'];
                        $sum += $result_sum;
                        ?>
                    </div>
                    <?php
                     endforeach;
                        }
                        else echo("<h3>không có sản phẩm trong giỏ hàng</h3>"); 
                    ?>
                    <div class="footer-info">
                        <div class="back-pay">
                            <div class="btn-back colum-5">
                                <a href="index.php" class="back-a"><i class="fa-solid fa-angle-left"></i>TIẾP TỤC MUA SẮM</a>
                            </div>
                            <div class="colum-2-5">

                            </div>
                            <div class="pay colum-2-5">
                                    <button class="btn-pay"><a href="checkout.php" style="text-decoration:none;color:white;">THANH TOÁN <i class="fa-solid fa-chevron-right"></a></i></button>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bill colum-3">
                    <div class="bill-tt">
                        <div class="title-bill colum-10">
                            <h6>TÓM TẮT ĐƠN HÀNG</h6>
                        </div>
                        <div class="expense-bill colum-10">
                            <p>Chi phí đơn hàng = Giá trị đơn hàng + phí vận chuyển + Thuế</p>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Giá Trị Đơn Hàng</span>
                            </div>
                           
                            <div class="value colum-3-5">
                                <span><?php echo number_format($sum,'0',',','.')?> VND</span>
                            </div>
                        </div>

                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Phí Vận Chuyển</span>
                            </div>
                            <div class="colum-2-5"></div>
                            <div class="value colum-3-5">
                                <span>0 VND</span>
                            </div>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Thuế</span>
                            </div>
                            <div class="colum-2-5"></div>
                            <div class="value colum-3-5">
                                <span>0 VND</span>
                            </div>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Tổng Chi Phí</span>
                            </div>
                           
                            <div class="value colum-3-5">
                                <span class="count-fee" style="color:red"><?php echo number_format($sum,'0',',','.')?> VND</span>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </main>
<?php
include ('./particals/footer.php');
?>
</body>
</html>