
<?php
require_once ('../database/connect_sql.php');
require_once('details_product.php');

$id = $_GET['id'];
if(empty($_SESSION['cart'][$id])){
    $sql = "SELECT * FROM product WHERE id ='$id'";
    $result = $dbc ->query($sql); 
  if($result){
        $row = $result->fetch_assoc();
        $_SESSION['cart'][$id]['title']=$row['title'];
        $_SESSION['cart'][$id]['price']=$row['price'];
        $_SESSION['cart'][$id]['thumbnail']=$row['thumbnail'];
        $_SESSION['cart'][$id]['quantity']=1;
    }
}else{
    $_SESSION['cart'][$id]['quantity']++;

}

?>

