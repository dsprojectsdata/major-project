<?php
include(__DIR__ . '/../layout/header.php');
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";

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
            <div class="user-order-block d-flex">
                  <div class="user-address-form">
                        <div class="user-order-heading">
                              <p>Billing Details</p>
                        </div>
                        <form action="form-input">
                              <div class="d-flex gap-20">
                                    <div class="form-input">
                                          <label for="first-name">Name</label>
                                          <input type="text" id="first-name" placeholder="Enter first name">
                                    </div>
                                    <div class="form-input">
                                          <label for="last-name">Last Name</label>
                                          <input type="text" id="last-name" placeholder="Enter last name">
                                    </div>
                              </div>

                              <div class="d-flex gap-20">
                                    <div class="form-input">
                                          <label for="email">Email</label>
                                          <input type="text" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-input">
                                          <label for="">Mobile</label>
                                          <input type="text" placeholder="Enter mobile">
                                    </div>
                              </div>

                              <div class="form-input">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" placeholder="Enter address">
                              </div>

                              <div class="form-input">
                                    <label for="city">Town/City</label>
                                    <input type="text" id="city" placeholder="Enter city">
                              </div>
                              <div class="form-input">
                                    <label for="zip">Zip Code</label>
                                    <input type="text" id="zip" placeholder="Enter zip">
                              </div>

                              <div class="form-input">
                                    <label for="notes">Order Notes</label>
                                    <textarea type="text" rows="5" id="notes" placeholder="Enter notes"></textarea>
                              </div>
                        </form>
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

      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>