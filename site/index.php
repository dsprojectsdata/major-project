<?php
include(__DIR__ . '/layout/header.php');

// session_destroy();
$sql = "SELECT * from product ";

$result = mysqli_query($con, $sql);
?>

<section class="banner-section">
      <div class="container">
            <div class="home-banner-block">
                  <div class="banner-content">
                        <h1>Discover & Shop The Trend</h1>
                        <h3>Up To <span>50%</span> Discount</h3>
                        <p>New Modern Stylist Fashionable Men's Wear Jeans Shirt.</p>
                        <button>Explore Now</button>
                  </div>
            </div>
      </div>
</section>

<section class="category-section section-separator">
      <div class="container">
            <div class="section-heading">
                  <h3>Top Category</h3>
            </div>
            <div class="category-block">
                  <div class="category">
                        <img src="<?php echo $site_url . 'assets/img/categories/category-1.png' ?>" alt="">
                  </div>

                  <div class="category">
                        <img src="<?php echo $site_url . 'assets/img/categories/category-2.png' ?>" alt="">
                  </div>

                  <div class="category">
                        <img src="<?php echo $site_url . 'assets/img/categories/category-3.png' ?>" alt="">
                  </div>

                  <div class="category">
                        <img src="<?php echo $site_url . 'assets/img/categories/category-4.png' ?>" alt="">
                  </div>
            </div>
      </div>
</section>


<section class="product-section section-separator">
      <div class="container">
            <div class="section-heading">
                  <h3>Our Top Collection</h3>
                  <p>There are some product that we featured for choose your best</p>
            </div>
            <div class="product-block">
                  <div class="product">
                        <img src="<?php echo $site_url . 'assets/img/products/shop-1.jpg' ?>" alt="">
                        <a href="#"><button class="primary-button">Add To Cart</button></a>
                  </div>

                  <div class="product">
                        <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                        <a href="#"><button class="primary-button">Add To Cart</button></a>
                  </div>

                  <div class="product">
                        <img src="<?php echo $site_url . 'assets/img/products/shop-3.jpg' ?>" alt="">
                        <a href="#"><button class="primary-button">Add To Cart</button></a>
                  </div>

                  <div class="product">
                        <img src="<?php echo $site_url . 'assets/img/products/shop-4.jpg' ?>" alt="">
                        <a href="#"><button class="primary-button">Add To Cart</button></a>
                  </div>
            </div>
      </div>
</section>






<?php
while ($data = $result->fetch_assoc()) { ?>
      <!-- <div class="card">
            <button class="card__love-btn">
                  <svg viewBox="0 0 512 512" width="100" title="heart">
                        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                  </svg>
            </button>
            <img class="card__img" src='https://images.unsplash.com/photo-1523275335684-37898b6baf30?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTkzNDcxOTR8&ixlib=rb-4.0.3&q=80&w=400' alt="Classical Watch">
            <div class="card__body">
                  <h3 class="card__title"><?php echo $data['name'] ?></h3>
                  <p class="card__text">
                        A classical watch is a timeless and elegant timepiece with its refined design and attention to detail that embodies sophistication and craftsmanship.
                  </p>
                  <div class="card__footer">
                        <a href="<?php echo $site_url ?>action/cart-add.php?id=<?php echo $data['id'] ?>">
                              <button class="btn">

                                    Add to cart
                              </button></a>
                        <h4 class="price">$<?php echo $data['price'] ?></h4>
                  </div>
            </div>
      </div> -->
<?php
}
?>
<?php
include(__DIR__ . '/layout/footer.php');
?>