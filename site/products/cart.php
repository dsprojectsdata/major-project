<?php
include(__DIR__ . '/../layout/header.php');
// echo "<pre>";
// echo "</pre>";

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>MY CART</h1>
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
                                    <th>Delete</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>2</td>
                                    <td><img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" class="cart-img"></td>
                                    <td>Black Boys Shirt</td>
                                    <td><b>$200</b></td>
                                    <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
                              </tr>
                              <tr>
                                    <td>2</td>
                                    <td><img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" class="cart-img"></td>
                                    <td>Black Boys Shirt Black Boys Shirt Black Boys Shirt</td>
                                    <td><b>$200</b></td>
                                    <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
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
            <div class="cart-total">
                  <table>
                        <thead>
                              <tr>
                                    <th colspan="2">Cart Total</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>Order Total:</td>
                                    <td><b>$<?php echo $total ?></b></td>
                              </tr>
                              <tr>
                                    <td colspan="2" style="text-align:right"><button type="button" class="primary-button">Proceed To Checkout</button></td>
                              </tr>
                        </tbody>
                  </table>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>