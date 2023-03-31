<?php
require_once ('../database/connect_sql.php');
$query = "SELECT * FROM category ";
$stmt = $dbc->query($query);
?>
<?php

$id =$_GET['id'];

$query="SELECT * FROM product WHERE category_id = '$id' ";
$result = $dbc->query($query);

if($id==='6'){
    header('Location: contact.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/category.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <title>Thời Trang Nam</title>
</head>
<body>
<header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center" style="position: unset;">
            <a class="navbar-brand" href="index.php">
                <img src="https://t004.gokisoft.com/uploads/2021/07/1-s-1636-logo-web.jpg " id="logo-header" style="width:100px;">
            </a>
            <ul class="navbar-nav ">
                <?php
                    if($stmt){
                        while($row = $stmt->fetch_assoc()){

                    
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
            <?php
                include ('./particals/body_category.php');
            ?>

                        <div class="product_view-list">
                            <?php 
                                  if($id ==='2'){
                                    while($row_2 = $result->fetch_assoc()){
                                
                            ?>
                            <div class="product_view-list-item colum-3">
                                <div class="product_view-info">
                                    <img title="" src="./assets/img/<?php echo $row_2['thumbnail']?>" alt="" class="product_view-info-img">
                                    <span class="product_view-info-sale-off"> NEW</span>
                                    <div class="product_view-info-btn">
                                        <button class="product_view-info-btn-buy"><a href="#" class="shopping_cart"><i class="fas fa-shopping-cart"  ></i></a></button>
                                        <button class="product_view-info-btn-watch"><i class="fas fa-search" id="shopping_search"></i><a href="details_product.php?id=<?php echo $row_2['id']?>" style="color:white;text-decoration:none;font-size:15px"> XEM</a></button>
                                    </div>  
                                </div>
                                <div class="proct_view-properties">Thời Trang Nam</div>
                                <div class="product_view-name"><b><?php echo $row_2['title']?></b></div>
                                <div class="product_view-cost">
                                    <span class="product_view-cost-new" style="color:red;font-size:17px"><?php echo $row_2['price']?> VND</span>
                                </div>
                            </div>
                        
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="product_view-list">
                            <?php 
                                  if($id==='3'){
                                    while($row_3 = $result->fetch_assoc()){
                                
                            ?>
                            <div class="product_view-list-item colum-3">
                                <div class="product_view-info">
                                    <img title="" src="./assets/img/<?php echo $row_3['thumbnail']?>" alt="" class="product_view-info-img">
                                    <span class="product_view-info-sale-off"> NEW</span>
                                    <div class="product_view-info-btn">
                                        <button class="product_view-info-btn-buy"><a href="#" class="shopping_cart"><i class="fas fa-shopping-cart"  ></i></a></button>
                                        <button class="product_view-info-btn-watch"><i class="fas fa-search" id="shopping_search"></i><a href="details_product.php?id=<?php echo $row_3['id']?>" style="color:white;text-decoration:none;font-size:15px"> XEM</a></button>
                                    </div>  
                                </div>
                                <div class="proct_view-properties">Thời Trang Nữ</div>
                                <div class="product_view-name"><b><?php echo $row_3['title']?></b></div>
                                <div class="product_view-cost">
                                    <span class="product_view-cost-new" style="color:red;font-size:17px"><?php echo $row_3['price']?> VND</span>
                                </div>
                            </div>
                        
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="product_view-list">
                            <?php 
                                    if($id === '4'){
                                    while($row_4 = $result->fetch_assoc()){
                                
                            ?>
                            <div class="product_view-list-item colum-3">
                                <div class="product_view-info">
                                    <img title="" src="./assets/img/<?php echo $row_4['thumbnail']?>" alt="" class="product_view-info-img">
                                    <span class="product_view-info-sale-off"> NEW</span>
                                    <div class="product_view-info-btn">
                                        <button class="product_view-info-btn-buy"><a href="#" class="shopping_cart"><i class="fas fa-shopping-cart"  ></i></a></button>
                                        <button class="product_view-info-btn-watch"><i class="fas fa-search" id="shopping_search"></i><a href="details_product.php?id=<?php echo $row_4['id']?>" style="color:white;text-decoration:none;font-size:15px"> XEM</a></button>
                                    </div>  
                                </div>
                                <div class="proct_view-properties">Thời Trang Trẻ Em</div>
                                <div class="product_view-name"><b><?php echo $row_4['title']?></b></div>
                                <div class="product_view-cost">
                                    <span class="product_view-cost-new" style="color:red;font-size:17px"><?php echo $row_4['price']?> VND</span>
                                </div>
                            </div>
                        
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="more-product">
                            <div class="more-product_page switch_active">1</div>
                            <div class="more-product_page">2</div>
                            <div class="more-product_page">
                                <i class="ti-angle-right more-product_page-next"></i>...
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
<?php
include ('./particals/footer.php');
?>
</body>
</html>