<?php

include(__DIR__ . '/../../config/connection.php');

if (!isset($_SESSION['userInfo'])) {
    header("location:$site_url");
}else{


$id = $_GET['id'];

$sql = "SELECT * from product WHERE id =$id  ";

$result = mysqli_query($con, $sql);
$data = $result->fetch_assoc();

$_SESSION['cart'][$id] = $data;
header("location:$site_url"."products/cart.php");

}
