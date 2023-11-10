<?php
include(__DIR__ . '/../config/connection.php');
echo "<pre>";

// print_r(count($_SESSION['cart']));
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $site_url ?>assets/css/style.css">

</head>

<body>

    <div class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="<?php echo $site_url ?>cart.php">Cart <span class="cart-count"><?php if (isset($_SESSION['cart'])) {
                                                                echo count($_SESSION['cart']);
                                                            }else{echo 0;} ?> </span></a>
        </div>
    </div>