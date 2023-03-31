<?php
require_once ('../database/connect_sql.php');

if(empty($_SESSION['id']) || $_SESSION['id'] != '1'){ 
    header('Location: index.php');
?>

<?php
    }
    else{

?>
<div class="regis-login" style="float:right; margin-right:20px; margin-top:30px">
        <div class="account" style="display:flex;">
            <p>Hi!</p>
            <p style="margin-left:5px; color:white;"><?php echo($_SESSION['fullname'])?></p>
            |
            <a href="logout_admin.php" style="color:white;">Đăng Xuất</a>

        </div>
</div>

<?php
    }
    
?>
