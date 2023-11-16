<?php
include(__DIR__ . '/../../config/connection.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-block">
                <div class="header-logo">
                <a href="<?php echo $site_url ?>index.php"><img src="<?php echo $site_url . 'assets/img/logo.png' ?>" alt=""></a>
                </div>
                <div class="header-menu">
                    <ul>
                        <li><a href="<?php echo $site_url ?>index.php">Home</a></li>
                        <li><a href="#"> Contact</a></li>
                        <li><a href="#"> Blogs</a></li>
                        <li><a href="<?php echo $site_url ?>orders.php"> Orders</a></li>
                        <li><a href="<?php echo $site_url ?>products/cart.php"> Cart<span class="cart-count">
                                    <?php if (isset($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo 0;
                                    } ?> </span></a></li>
                        <li><a href="<?php echo $site_url ?>auth/login.php"><button class="primary-button">Login</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>