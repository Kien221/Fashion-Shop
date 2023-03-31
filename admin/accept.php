<?php
require_once ('../database/connect_sql.php');
$id_order = $_GET['id'];
$status = $_GET['status'];
$query = "update orders set status = $status where id = '$id_order'";
$result = $dbc->query($query);
if($result){
    header('Location: order.php');
}
?>