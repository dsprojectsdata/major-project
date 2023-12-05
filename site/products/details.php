<?php
include(__DIR__ . '/../layout/header.php');
$id = $_GET['id'];

$sql = " SELECT *,product.name as pro_name,product.id as pro_id FROM product JOIN category ON product.category = category.id WHERE product.id =$id";
$result = mysqli_query($con, $sql);
$pro_data = $result->fetch_assoc();
?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>Product Details</h1>
            </div>
      </div>
</section>


<section class="pro-details">
      <div class="container">
            <div class="pro-details-block">
                  <div class="pro-details-left">
                        <img src="<?php echo $site_url . 'assets/uploads/products/' . $pro_data['img'] ?>" alt="">

                  </div>
                  <div class="pro-details-right">
                        <h2 class="tesxt-grey"><?php echo $pro_data['pro_name']; ?></h2>
                        <p><b>$<?php echo $pro_data['price']; ?></b></p>
                        <p class="my-10 text-grey">
                              <?php echo $pro_data['description']; ?>
                        </p>
                        <p class="my-10"><b>Category : </b> <span class="text-grey"> <?php echo $pro_data['name'] ?></span></p>
                        <a href="<?php echo $site_url ?>action/cart-add.php?id=<?php echo $pro_data['pro_id'] ?>"><button class="primary-button">Add To Cart</button></a>

                  </div>
            </div>
            <div class="pro-details-desc">
                  <p class="my-10">
                        <?php echo $pro_data['long_description']; ?>
                  </p>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>