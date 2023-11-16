<?php
include(__DIR__ . '/../layout/header.php');
// echo "<pre>";
// echo "</pre>";

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>Product Search</h1>
            </div>
      </div>
</section>


<section class="pro-search">
      <div class="container">
            <div class="pro-search-block">
                  <div class="pro-search-left">
                        <div class="filter-option pro-search-input">
                              <input type="text" placeholder="Search products...">
                              <button class="pro-search-btn"><i class="fa-solid fa-search"></i></button>
                        </div>
                        <div class="filter-option">
                              <h5>Categories</h5>
                              <ul>
                                    <li class="text-grey">asd</li>
                                    <li class="text-grey">asd</li>
                                    <li class="text-grey">sd</li>
                              </ul>
                        </div>
                        <div class="filter-option">
                              <h5>Price</h5>
                              <div class="price-filter">
                                    <input type="text" placeholder="Min">
                                    <input type="text" placeholder="Max">
                              </div>
                              <div>
                                    <button class="primary-button w-100"><i class="fa-solid fa-search"></i></button>
                              </div>
                        </div>
                  </div>
                  <div class="pro-search-right">
                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="product-btns">
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="product-btns">
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="product-btns">
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="product-btns">
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="product-btns">
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="#"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>