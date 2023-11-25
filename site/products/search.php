<?php
include(__DIR__ . '/../layout/header.php');

$cateSql = "SELECT * from category ";
$cateResult = mysqli_query($con, $cateSql);


$name = $_GET['name'];
$min = $_GET['min'];
$max = $_GET['max'];
$cate_id = $_GET['cate_id'];

$proSql = "SELECT * from product WHERE (price > '$min' AND price < '$max') AND name LIKE '%am%' OR category =  '$cate_id '";
$proResult = mysqli_query($con, $proSql);

print_r($proResult);


while ($data = $proResult->fetch_assoc()) {

      // pre($data);
}

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
                        <form action="" method="get">
                        <div class="filter-option pro-search-input">
                              <input type="text" name="name" placeholder="Search products...">
                              <button class="pro-search-btn"><i class="fa-solid fa-search"></i></button>
                        </div>
                        <div class="filter-option">
                              <h5>Price</h5>
                              <div class="price-filter">
                                    <input type="text" name="min" placeholder="Min">
                                    <input type="text" name="max" placeholder="Max">
                              </div>
                              <div>
                                    <button class="primary-button w-100"><i class="fa-solid fa-search"></i></button>
                              </div>
                        </div>
                        <div class="filter-option">
                              <h5>Categories</h5>
                              <select name="cate_id">
                                    <option value="">asd</option>
                              </select>
                        </div>

                  </form>
                  </div>

                  <div class="pro-search-right">
                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10">watch </p>
                                    <p class="px-10"><b>$200</b></p>
                              </div>
                              <div class="product-btns my-10">
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10">watch </p>
                                    <p class="px-10"><b>$200</b></p>
                              </div>
                              <div class="product-btns my-10">
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10">watch </p>
                                    <p class="px-10"><b>$200</b></p>
                              </div>
                              <div class="product-btns my-10">
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>

                        <div class="product">
                              <img src="<?php echo $site_url . 'assets/img/products/shop-2.jpg' ?>" alt="">
                              <div class="my-10 text-left">
                                    <p class="px-10">watch </p>
                                    <p class="px-10"><b>$200</b></p>
                              </div>
                              <div class="product-btns my-10">
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                    <a href=""><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>