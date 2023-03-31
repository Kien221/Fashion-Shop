<?php
require_once ('../database/connect_sql.php');
$query = "SELECT * FROM category ";
$result = $dbc->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center" style="position: unset;">
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
    <div class="banner">
        <img src="./assets/img/1-s-1634-banner-web.jpg" alt="#" class="img-banner"> 
        <div class="sub-banner">
            <div class="banner-text">B1910088,B1910089,B1910070 Thiết kế website</div>
            <div class="banner-introduce">
                <a class="banner-link btn btn-success" href="category.php?id=2">Xem sản phẩm</a>
            </div>
        </div>
    </div>
    <!-- BODY -->
    <div class="body">
        <div class="body-header">
            <h2>THỜI TRANG TRẺ EM, PHỤ NỮ VÀ NAM GIỚI</h2>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">SẢN PHẨM BÁN CHẠY NHẤT</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $query_stmt = "SELECT * FROM product where id>=1 && id<=5";
                    $stmt = $dbc ->query($query_stmt);
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
                    ?>
                    <div class="col product-item">
                        <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="details_product.php?id=<?php echo $row['id'] ?>" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name"><?php echo $row['title'] ?></span>
                            <span class="product-cost"><?php echo $row['price'] ?> VND</span>
                        </div>  
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-new">
            <div class="product-intro">
                <h3 class="product-text">SẢN PHẨM MỚI NHẤT</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $query_stmt = "SELECT * FROM product WHERE id>=3 && id<=7";
                    $stmt = $dbc ->query($query_stmt);
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
                    ?>
                    <div class="col product-item">
                        <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="details_product.php?id=<?php echo $row['id'] ?>" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name"><?php echo $row['title'] ?></span>
                            <span class="product-cost"><?php echo $row['price'] ?> VND</span>
                        </div>  
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG NAM</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $query_stmt = "SELECT * FROM product where id>=2 && id<=6";
                    $stmt = $dbc ->query($query_stmt);
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
                    ?>
                    <div class="col product-item">
                        <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="details_product.php?id=<?php echo $row['id'] ?>" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name"><?php echo $row['title'] ?></span>
                            <span class="product-cost"><?php echo $row['price'] ?> VND</span>
                        </div>  
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-new">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG CỦA PHỤ NỮ</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $query_stmt = "SELECT * FROM product where id>=8 && id<=12";
                    $stmt = $dbc ->query($query_stmt);
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
                    ?>
                    <div class="col product-item">
                        <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="details_product.php?id=<?php echo $row['id'] ?>" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name"><?php echo $row['title'] ?></span>
                            <span class="product-cost"><?php echo $row['price'] ?> VND</span>
                        </div>  
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG TRẺ EM</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $query_stmt = "SELECT * FROM product where id>=14 && id<=18";
                    $stmt = $dbc ->query($query_stmt);
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
                    ?>
                    <div class="col product-item">
                        <img src="./assets/img/<?php echo $row['thumbnail'] ?>" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="details_product.php?id=<?php echo $row['id'] ?>" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name"><?php echo $row['title'] ?></span>
                            <span class="product-cost"><?php echo $row['price'] ?> VND</span>
                        </div>  
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
include ('./particals/footer.php');
?>
</body>
</html>