<?php
include(__DIR__ . '/../layout/header.php');

if (!isset($_SESSION['cart'])) {
      header("location:$site_url");
}

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>ADDRESS</h1>
            </div>
      </div>
</section>


<section class="user-order">
      <div class="container">
            <div class="user-order-block">
                  <form method="post" action="../action/order-place-action.php">
                        <div class="user-order-form d-flex">
                              <div class="user-address-form">
                                    <div class="user-order-heading">
                                          <p>Billing Details</p>
                                    </div>
                                    <div class="d-flex gap-20">
                                          <div class="form-input">
                                                <label for="first-name">First Name</label>
                                                <input type="text" name="f_name" id="first-name" placeholder="Enter first name">
                                          </div>
                                          <div class="form-input">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" name="l_name" id="last-name" placeholder="Enter last name">
                                          </div>
                                    </div>

                                    <div class="d-flex gap-20">
                                          <div class="form-input">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" placeholder="Enter email">
                                          </div>
                                          <div class="form-input">
                                                <label for="">Mobile</label>
                                                <input type="text" name="mobile" placeholder="Enter mobile">
                                          </div>
                                    </div>

                                    <div class="form-input">
                                          <label for="address">Address</label>
                                          <input type="text" name="address" id="address" placeholder="Enter address">
                                    </div>

                                    <div class="form-input">
                                          <label for="city">Town/City</label>
                                          <input type="text" name="city" id="city" placeholder="Enter city">
                                    </div>
                                    <div class="form-input">
                                          <label for="zip">Zip Code</label>
                                          <input type="text" name="zip" id="zip" placeholder="Enter zip">
                                    </div>

                                    <div class="form-input">
                                          <label for="notes">Order Notes</label>
                                          <textarea type="text" name="notes" rows="5" id="notes" placeholder="Enter notes"></textarea>
                                    </div>
                              </div>
                              <div class="user-place-order">
                                    <div class="user-order-heading">
                                          <p>Payment Proccess</p>
                                    </div>
                                    <div class="user-place-order-block">
                                          <div class="form-input">
                                                <label for="cod">
                                                      <input type="radio" id="cod" name="payment_type">
                                                      Cash On Delivery
                                                </label>
                                                <label for="paytm">
                                                      <input type="radio" id="paytm" name="payment_type">
                                                      Paytm
                                                </label>
                                          </div>
                                          <div class="form-input form-btn">
                                                <button class="primary-button">Place Your Order <i class="fa-solid fa-up-right-from-square"></i></button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </form>
            </div>

      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>