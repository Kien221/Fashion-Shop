<?php
require_once ('../database/connect_sql.php');
$id = $_GET['id'];
$query = "DELETE from order_details where order_id = '$id'";
$result = $dbc->query($query);
if($result){
    header('Location: order.php');
}
$query = "DELETE from orders where id = '$id'";
$result_stmt = $dbc->query($query);
if($result_stmt){
    header('Location: order.php');
}
?>