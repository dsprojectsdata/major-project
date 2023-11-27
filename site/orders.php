<?php
include(__DIR__ . '/layout/header.php');

if (!isset($_SESSION['userInfo'])) {
      header("location:$site_url");
}

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>MY ORDERS</h1>
            </div>
      </div>
</section>


<section class="cart-page">
      <div class="container">
            <div class="cart-block">
                  <table>
                        <thead>
                              <tr>
                                    <th>S. No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Date</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>2</td>
                                    <td><img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" class="cart-img"></td>
                                    <td>Black Boys Shirt</td>
                                    <td><b>$200</b></td>
                                    <td>2023-02-02</td>
                              </tr>
                              <tr>
                                    <td>2</td>
                                    <td><img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" class="cart-img"></td>
                                    <td>Black Boys Shirt Black Boys Shirt Black Boys Shirt</td>
                                    <td><b>$200</b></td>
                                    <td>2023-02-02</td>
                              </tr>
                        </tbody>
                  </table>
            </div>
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {

                  foreach ($_SESSION['cart'] as $key => $value) {
                        $total += $value['price'];
                  }
            }
            ?>
      </div>
</section>


<?php
include(__DIR__ . '/layout/footer.php');
?>