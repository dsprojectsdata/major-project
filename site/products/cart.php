<?php
include(__DIR__ . '/../layout/header.php');
// pre($_SESSION);

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

                              <?php
                              $i = 1;
                              if (isset($_SESSION['cart'])) {

                                    foreach ($_SESSION['cart'] as $key => $item) { ?>
                                          <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" class="cart-img"></td>
                                                <td><?php echo $item['name'] ?></td>
                                                <td><b>$<?php echo $item['price'] ?></b></td>
                                                <td><a href="<?php echo $site_url . 'action/cart-product-remove.php?id=' . $item['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                                          </tr>
                                    <?php
                                    }
                              } else { ?>
                                    <tr>
                                          <td colspan="5" style="text-align:center">No product in cart</td>
                                    </tr>
                              <?php }
                              ?>
                        </tbody>
                  </table>
                  <div class="my-10 text-right">
                        <a href="<?php echo $site_url . 'action/cart-product-remove.php?type=all-clear'?>"><button type="button" class="primary-button"><i class="fa-solid fa-trash"></i> Clear Cart</button></a>
                  </div>
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
                                    <td colspan="2" style="text-align:right">
                                          <a href="<?php echo $site_url ?>user/checkout-address.php">
                                                <button type="button" class="primary-button">Proceed To Checkout</button></a>
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>