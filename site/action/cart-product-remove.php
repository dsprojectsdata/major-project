<?php

include(__DIR__ . '/../../config/connection.php');


if (isset($_GET['type'])) {
      unset($_SESSION['cart']);
} else {
      $id = $_GET['id'];
      unset($_SESSION['cart'][$id]);
}

header("location:$site_url" . 'products/cart.php');
