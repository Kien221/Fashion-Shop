<?php
$id = $_GET['id'];
session_start();
unset($_SESSION['cart'][$id]);
header('Location: ../cart.php');

?>