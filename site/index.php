<?php
include(__DIR__ . '/layout/header.php');

// session_destroy();
$proSql = "SELECT * from product ";
$proResult = mysqli_query($con, $proSql);

$cateSql = "SELECT * from category ";
$cateResult = mysqli_query($con, $cateSql);

$blogSql = "SELECT * from blogs ORDER BY created_at DESC LIMIT 4 ";
$blogResult = mysqli_query($con, $blogSql);

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
                  <h3>Top Categories</h3>
                  <p>Choose our best categories</p>
            </div>
            <div class="category-block">
                  <?php while ($data = $cateResult->fetch_assoc()) { ?>
                        <div class="category">
                              <img src="<?php echo $site_url . 'assets/uploads/category/' . $data['image'] ?>" alt="">
                              <a href="<?php echo $site_url ?>products/search.php?cate_id=<?php echo $data['id'] ?>">
                                    <p class="text-center my-10"><?php echo $data['name'] ?></p>
                              </a>
                        </div>

                  <?php
                  }
                  ?>
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
                  <?php while ($data = $proResult->fetch_assoc()) {
                  ?>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/uploads/products/' . $data['img'] ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10"><?php echo $data['name'] ?> </p>
                                    <p class="px-10"><b>$<?php echo $data['price'] ?></b></p>
                              </div>
                              <div class="product-btns my-10">
                                    <a href="<?php echo $site_url ?>action/cart-add.php?id=<?php echo $data['id'] ?>"><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href="<?php echo $site_url . 'products/details.php?id=' . $data['id'] ?>"><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>
                  <?php
                  }
                  ?>
            </div>
      </div>
</section>

<section class="blogs-section section-separator">
      <div class="container">
            <div class="section-heading">
                  <h3>Our Blogs</h3>
                  <p>Check our latest blogs to get the latest updates</p>
            </div>
            <div class="blogs-block">
                  <?php while ($data = $blogResult->fetch_assoc()) {
                  ?>
                        <div class="blogs">
                              <img src="<?php echo $site_url . 'assets/uploads/blogs/'.$data['img'] ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10"><?php echo $data['title'] ?></p>
                                    <p class="px-10"><?php echo substr($data['description'],0,60) ?></p>
                              </div>
                              <div class="my-10 px-10 blogs-date">
                                    <p class="text-grey"><?php echo date("M d Y",strtotime($data['created_at'])) ?> </p>
                                    <a href="<?php echo $site_url . 'blogs/details.php?id='.$data['id'] ?>" class="px-10">Read More</a>

                              </div>
                        </div>
                  <?php
                  }
                  ?>
            </div>
      </div>
</section>




<?php
include(__DIR__ . '/layout/footer.php');
?>