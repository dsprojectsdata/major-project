<?php
include(__DIR__ . '/../../config/connection.php');
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
                        <li><a href="<?php echo $site_url ?>about.php"> About Us</a></li>
                        <li><a href="<?php echo $site_url ?>contact.php"> Contact</a></li>
                        <li><a href="#"> Blogs</a></li>

                        <?php
                        if (isset($_SESSION['userInfo'])) { ?>
                            <li><a href="<?php echo $site_url ?>orders.php"> Orders</a></li>
                            <li><a href="<?php echo $site_url ?>products/cart.php"> Cart<span class="cart-count">
                                        <?php if (isset($_SESSION['cart'])) {
                                            echo count($_SESSION['cart']);
                                        } else {
                                            echo 0;
                                        } ?> </span></a></li>
                        <?php
                        } ?>

                        <li><a href="<?php echo $site_url ?>products/search.php"> <i class="fa-solid fa-search"></i></a></li>
                        <?php
                        if (isset($_SESSION['userInfo'])) { ?>
                            <li><a href="<?php echo $site_url ?>action/logout-action.php"><button class="primary-button">Logout</button></a></li>
                        <?php
                        } else { ?>
                            <li><a href="<?php echo $site_url ?>auth/login.php"><button class="primary-button">Login</button></a></li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>