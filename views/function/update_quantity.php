<?php
$id = $_GET['id'];
$type = $_GET['type'];
session_start();
if($type === 'decrea'){
    if($_SESSION['cart'][$id]['quantity'] > 1){
        $_SESSION['cart'][$id]['quantity']--;
    }else{
        unset($_SESSION['cart'][$id]);
    
    }
}
else{
    $_SESSION['cart'][$id]['quantity']++;
}
header('Location: ../cart.php');
?>