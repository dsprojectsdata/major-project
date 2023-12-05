<?php
include(__DIR__ . '/../layout/header.php');
$id = $_GET['id'];

$sql = " SELECT * FROM blogs WHERE id =$id";
$result = mysqli_query($con, $sql);
$blog_data = $result->fetch_assoc();
?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>Blog Details</h1>
            </div>
      </div>
</section>


<section class="blogs-details">
      <div class="container">
            <div class="blogs-details-block my-10">
                  <div class="blogs-details-img">
                        <img src="<?php echo $site_url . 'assets/uploads/blogs/'.$blog_data['img']  ?>" alt="">
                  </div>
                  <div class="blogs-details-desc">
                        <p class="my-10">
                              <?php echo $blog_data['description'] ?>
                        </p>
                  </div>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>