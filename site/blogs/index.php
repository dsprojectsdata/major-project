<?php
include(__DIR__ . '/../layout/header.php');

$blogSql = "SELECT * from blogs ORDER BY created_at DESC";
$blogResult = mysqli_query($con, $blogSql);

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>Blog</h1>
            </div>
      </div>
</section>

<section class="blogs-section section-separator">
      <div class="container">
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
include(__DIR__ . '/../layout/footer.php');
?>