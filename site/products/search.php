<?php
include(__DIR__ . '/../layout/header.php');

$cateSql = "SELECT * from category ";
$cateResult = mysqli_query($con, $cateSql);

$name = isset($_GET['name']) ? $_GET['name'] : '';
$min = isset($_GET['min']) ? $_GET['min'] : 0;
$max = isset($_GET['max']) ? $_GET['max'] : 0;
$cate_id = isset($_GET['cate_id']) ? $_GET['cate_id'] : '';


// $name = $_GET['name'];
// $min = $_GET['min'];
// $max = $_GET['max'];
// $cate_id = $_GET['cate_id'];

$proSql = "SELECT * from product WHERE 1";

if ($min || $max) {
      $proSql .= " AND (price > '$min' AND price < '$max')";
}
if ($name) {
      $proSql .= " AND name LIKE '%$name%'";
}
if ($cate_id) {
      $proSql .= " AND category =  '$cate_id '";
}


$proResult = mysqli_query($con, $proSql);

// while ($data = $proResult->fetch_assoc()) {

// pre($data, 'asd');
// }

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
                                          <option value="">Select Category</option>
                                          <?php
                                          while ($data = $cateResult->fetch_assoc()) { ?>
                                                <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
                                          <?php } ?>
                                    </select>
                                    <div>
                                          <button class="primary-button w-100"><i class="fa-solid fa-search"></i></button>
                                    </div>
                              </div>

                        </form>
                  </div>

                  <div class="pro-search-right">
                        <?php
                        while ($data = $proResult->fetch_assoc()) { ?>
                              <div class="product">
                                    <img src="<?php echo $site_url . 'assets/uploads/products/' . $data['img'] ?>" alt="">
                                    <div class="my-10 text-left">
                                          <p class="px-10"><?php echo $data['name'] ?> </p>
                                          <p class="px-10"><b>$<?php echo $data['price'] ?></b></p>
                                    </div>
                                    <div class="product-btns my-10">
                                          <a href=""><button class="primary-button"><i class="fa-solid fa-cart-plus"></i></button></a>
                                          <a href=""><button class="primary-button"><i class="fa-solid fa-eye"></i></button></a>
                                    </div>
                              </div>
                        <?php } ?>


                  </div>
            </div>

      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>