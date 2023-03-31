<?php
require_once ('../database/connect_sql.php');
if(empty($_SESSION['id']) || $_SESSION['id'] == '1'){ 
unset($_SESSION['cart']);
?>
<div class="regis-login" style="float:right;">
            <a href="registra.php"> Đăng Ký</a>
            |
            <a href="login.php">Đăng nhập</a>
</div>

<?php
    }
    else{

?>

<div class="regis-login" style="float:right;">
        <div class="account" style="display:flex;">
            <p>Hi!</p>
            <p style="margin-left:5px; color:red;" class="name_account"><?php echo($_SESSION['fullname'])?></p>
            |
            <a href="./function/logout.php">Đăng Xuất</a>

        </div>
        <div class="order" style="margin-top:-20px;background-color:#FE9A2E;text-align:center;border-radius:10px">
            <a href="view_order.php?id= <?php echo $_SESSION['id']?>" style="color:white;">Xem Đơn Hàng</a>
        </div>
</div>

<?php
    }
    
?>