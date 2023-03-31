<?php
require_once ('../database/connect_sql.php');
?>
<?php
$query_stmt = "SELECT * FROM category ";
$stmt = $dbc->query($query_stmt);
?>
<?php
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0){
    $id = $_GET['id'];
    $query = "SELECT * FROM product where id = '$id'";
    $result = $dbc ->query($query);
    if($result){
        $row = $result->fetch_assoc();
    }
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/main.css">
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="./assets/css/details.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Product</title>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center" style="position: unset;">
            <a class="navbar-brand " href="index.php">
                <img src="https://t004.gokisoft.com/uploads/2021/07/1-s-1636-logo-web.jpg " id="logo-header" style="width:100px;">
            </a>
            <ul class="navbar-nav ">
                <?php
                    if($stmt){
                        while($row_stmt = $stmt->fetch_assoc()){
                ?>
               <li class="nav-item">
                  <a class="nav-link text-success" href="category.php?id=<?php echo $row['id'] ?>"><?php echo $row_stmt['name'] ?></a>
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
            <div class="product_selection grid">
                <div class="product_view"> 
                    <div class="product_view-list">
                        
                        <div class="product_view-list-item col-5">
                            <div class="product_view-intro-img">
                                <img title="" src="./assets/img/<?php echo $row['thumbnail'] ?>" alt="" class="introduce-img">
                            </div>
                        </div>
                        <div class="introduct-img col-3">
                            <div class="product_view-info">
                                <img title="" src="./assets/img/<?php echo $row['thumbnail'] ?>" alt="" class="product_view-info-img">
                                <span class="product_view-info-sale-off"> SALE</span>   
                            </div>
                        </div>

                        <div class="product_view-list-item col-3">
                            <div class="product_view-info">
                                <div class="product_view-info-menu">
                                    <a class="product_view-info-a" href="#"> Trang Chủ </a>
                                    <p class="icon-mid">/</p>
                                    <a class="product_view-info-a" href="nam.html"> Sản Phẩm </a>
                                    <p class="icon-mid">/</p>
                                    <p class="product_view-info-p"><?php echo $row['title'] ?></p>
                                </div>
                                <div class="product_view_names">
                                    <b><?php echo $row['title'] ?></b>
                                </div>
                                <div class="product-rating-price">
                                    <div class="rating">
                                       <p class="rating-p">5.0</p>
                                        <div class="stars">
                                            <form action="" class="starform">
                                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                <label class="star star-5" for="star-5"></label>
                                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                <label class="star star-4" for="star-4"></label>
                                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                <label class="star star-3" for="star-3"></label>
                                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                <label class="star star-2" for="star-2"></label>
                                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                <label class="star star-1" for="star-1"></label>
                                            </form>
                                        </div>
                                        <br>
                                        <p class="rating-sold">99 Đã Bán</p>
                                    </div>
                                    <div class="product-price">
                                        <p class="product-price-new"><?php echo $row['price'] ?> VND</p>
                                        <P class="product-price-old"><?php echo $row['discount'] ?> VND</P>  
                                    </div>
                                </div>
                                <div class="product-size">
                                    <p class="product-size-p">SIZE</p> 
                                    <span class="product-size-span"> (bắt buộc)</span>
                                </div>
                                <div class="product-box-size-check">
                                    <button class="box-size-check">
                                        <span class="box-size-check-p">S</span>
                                    </button>
                                    <button class="box-size-check">
                                        <span class="box-size-check-p">M</span>
                                    </button>                                    
                                    <button class="box-size-check">
                                        <span class="box-size-check-p">L</span>
                                    </button>
                                    <button class="box-size-check">
                                        <span class="box-size-check-p">XL</span>
                                    </button>
                                </div>
                                

                                    <div class="product-much">
                                        <div class="text" style="display: flex;">
                                            <p class="product-size-p">SỐ SẢN PHẨM</p> 
                                            <span class="product-size-span"> (bắt buộc)</span>
    
                                        </div>
                                        <input type="number" value="1" id="" style="width: 100px;">
                                    </div>
                                    
                                    <div class="product-view-shoppingcart">
                                        <button class="product-shoppingcartadd-btn" type="submit"><i class="fas fa-shopping-cart" id="shopping_cart"></i><a href="add_product.php?id=<?php echo $row['id']?>" target="_self">THÊM VÀO GIỎ HÀNG</a></button>
                                    </div>
                                    <div class="product-view-shoppingcart">
                                        <button class="product-shoppingcartview-btn"><i class="fas fa-heart" id="shopping_cart"></i><a href="cart.php" style="color:black;font-weight:bold;"> XEM GIỎ HÀNG</a></button>
                                    </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-profile">
                <p class="product-profile-title">CHI TIẾT SẢN PHẨM</p>
                <div class="profile-content">
                    <p class="product-profile-content">Quần khaki co giãn.<br>
                        Form jogger, cạp chun phía sau, gấu chun, túi chéo.</br>
                        Phong cách trẻ trung, mặc thoải mái phù hợp với áo phông</p>
                </div>
                <div class="share-social">
                    5 Shares
                    <img src="./assets/img/124021.png" alt="" class="icon">
                    <img src="./assets/img/1409946.png" alt="" class="icon">
                    <img src="./assets/img/179335.png" alt="" class="icon">
                    <img src="./assets/img/3536394.png" alt="" class="icon">
                    <img src="./assets/img/3536602.png" alt="" class="icon">
                </div>
                
            </div>
        </div>
        <div class="payment">
            <div class="grid2">
                <div class="transport col-2">
                    <i class="fa fa-truck" id="icon-transport"></i>
                    <br>
                    <a href="#" class="title-transporst"><h5>Giao Hàng 24/7</h5></a>
                    <p>Vận chuyển toàn quốc</p>
                </div>

                <div class="transport col-2">
                    <i class="fa fa-user-shield" id="icon-transport"></i>
                    <br>
                    <a href="#" class="title-transporst"><h5>Thanh toán bảo mật</h5></a>
                    <p>An toàn tuyệt đối</p>
                </div>

                <div class="transport col-2">
                    <i class="fa fa-headphones" id="icon-transport"></i>
                    <br>
                    <a href="#" class="title-transporst"><h5>Hỗ trợ tuyệt đối</h5></a>
                    <p>Chúng tôi hỗ trợ bạn 24/7</p>
                </div>
                <div class="transport col-2">
                    <i class="fa fa-hand-holding-usd" id="icon-transport"></i>
                    <br>
                    <a href="#" class="title-transporst"><h5>Hỗ trợ tuyệt đối</h5></a>
                    <p>Chúng tôi hỗ trợ bạn 24/7</p>
                </div>
            </div>
            
        </div>
    </main>
<?php
include ('./particals/footer.php');
?>
</body>
</html>