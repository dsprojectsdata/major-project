<?php

include(__DIR__ . '/../../config/connection.php');
echo "<pre>";

$id = $_GET['id'];

unset($_SESSION['cart'][$id]);
header("location:$site_url" . 'products/cart.php');
