<?php
// include('../../config/connection.php');
include(__DIR__ . '/../../config/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


      <link rel="stylesheet" href="<?php echo $admin_url ?>assets/css/style.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      
      <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
      <div class="body">
            <aside class="sidebar">
                  <div class="logo">
                    <a href="<?php echo $site_url ?>index.php"><img src="<?php echo $site_url . 'assets/img/logo.png' ?>" alt=""></a>
                  </div>
                  <ul>
                        <li><a href="http://localhost/major-project/admin/index.php">Dashboard</a></li>
                        <li> <a href="http://localhost/major-project/admin/products/category.php">Category</a></li>
                        <li> <a href="http://localhost/major-project/admin/products/product.php">Product</a></li>
                  </ul>
            </aside>


            <div class="content-area">
                  <header>
                        <ul>
                              <li><a href="#">Logout</a></li>
                        </ul>
                  </header>
                  <div class="content">